<?php namespace Nutri\Http\Controllers;

use Illuminate\Http\Request;
use Nutri\Products;
use Nutri\ProductImages;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Products::activePaginator();
		return view('welcome', compact('products'));
	}

	public function nosotros()
	{
		return view('about');
	}

	public function detailProduct($id)
	{
		$product = Products::findOrFail($id);
		$images = ProductImages::where('product_id', $id)->get(['img']);

		return view('product-detail', compact('product', 'images'));
	}

	public function registerClient(Request $request)
	{
		$product = Products::findOrFail($request->get('product_id'));
		session(['quanty' => $request->get('quanty')]);
		session(['product' => $product]);

		return redirect()->route('addDataClient');
	}

	public function contactanos()
	{
		return view('contact');
	}
}
