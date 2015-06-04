<?php namespace Nutri\Http\Controllers;

use Nutri\Products;

class AdminController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Products::paginator();
		return view('admin.home', compact('products'));
	}

}
