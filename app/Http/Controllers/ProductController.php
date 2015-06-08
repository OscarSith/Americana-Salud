<?php namespace Nutri\Http\Controllers;

use Nutri\Http\Requests\ProductRequest;
use Nutri\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Nutri\Products;
use Nutri\ProductImages;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create-product');
	}

	/**
	 * Store a newly created resource in storage.
	 * Request jalado por Injección de Dependencias
	 * @return Response
	 */
	public function store(Request $request, ProductRequest $vrequest)
	{
		$values = $request->all();
		$file = $request->file('default_img');
		if ( $request->hasFile('default_img') && $file->isValid()) {

			if ($file->getClientSize() > 1530000)
			{
				return redirect()->back()->with('error', 'La imagen no debe pesar mas de 1.5 mb')->withInput($values);
			}

			$fileName = str_random(5).str_replace([' ', '-'], '_', $file->getClientOriginalName());
			$values['default_img'] = $fileName;

			\DB::transaction(function() use ($values, $file) {

				$product = Products::create($values);

				$image['product_id'] = $product->id;
				$image['img'] = $product->default_img;
				ProductImages::create($image);

				$file->move( public_path('img/products'), $product->default_img);
			});

			return redirect()->route('admin')->with('success', 'Producto agregado con exito');
		}

		return redirect()->back()->with('error', 'Debe elegir una imagen')->withInput($values);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$empresa = Products::findOrFail($id);
		return view('admin.edit-product', compact('empresa'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$values = $request->all();
		$this->validate($request, [
			'name' => 'required|max:255',
			'codigo' => 'required|max:10|unique:products,codigo,' . $values['id'],
			'price' => 'required|numeric',
			'short_info' => 'required|max:255',
			'currency' => 'required|in:S,D'
		]);

		$product = Products::find($id);
		if($product->update($values))
		{
			return redirect()->route('admin')->with('success', 'Producto "' . $values['name'] . '" editado.');
		}

		return redirect()->back()->with('error', 'Error, no se pudo actualizar, intentelo de nuevo');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function changeStatus($id, Request $request)
	{
		$product = Products::findOrFail($id);
		$product->estado = $request->get('status');
		$product->save();

		return redirect()->back();
	}

	public function setDefault($id, Request $request)
	{
		$image = Products::findOrFail($id);
		$image->update($request->only(['default_img']));
		return redirect()->back();
	}
}
