<?php namespace Nutri\Http\Controllers;

use Nutri\Http\Requests\ProductRequest;
use Nutri\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Nutri\Products;

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

			DB::transaction(function() use ($values) {

				public_path('img/products');
				$product = Products::create($values);

				$image['product_id'] = $product->id;
				$image['img'] = $product->default_img;
				$image = ProductImage::create($image);

				$request->file('default_img')->move();
			});
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
