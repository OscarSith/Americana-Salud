<?php namespace Nutri\Http\Controllers;

use Nutri\Http\Requests\ProductImageRequest;
use Nutri\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Nutri\ProductImages;
use Nutri\Products;

class ProductImagesController extends Controller
{
	public function index($id)
	{
		$images = ProductImages::paginator($id);
		$default_img = Products::where('id', $id)->pluck('default_img');
		return view('admin.product-images', compact('images', 'id', 'default_img'));
	}

	public function store(Request $request, ProductImageRequest $request)
	{
		$values = $request->all();
		$file = $request->file('img');
		if ( $request->hasFile('img') && $file->isValid()) {

			if ($file->getClientSize() > 1530000)
			{
				return redirect()->back()->with('error', 'La imagen no debe pesar mas de 1.5 mb')->withInput($values);
			}

			$fileName = str_random(5).str_replace([' ', '-'], '_', $file->getClientOriginalName());
			$values['img'] = $fileName;
			ProductImages::create($values);

			$file->move( public_path('img/products'), $values['img']);

			return redirect()->back()->with('success', 'Imagen agregada con exito');
		}

		return redirect()->back()->with('error', 'Debe elegir una imagen')->withInput($values);
	}

	public function delete($id)
	{
		$Image = new ProductImages();
		if($Image->remove($id) ) {
			return redirect()->back()->with('success', 'Imagen eliminado exitosamente');
		}

		return redirect()->back()->with('error', 'Error, no se pudo eliminar la imagen, intentelo de nuevo');
	}
}