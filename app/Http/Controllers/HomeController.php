<?php namespace Nutri\Http\Controllers;

use Nutri\Products;

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

	public function contactanos()
	{
		return view('contact');
	}
}
