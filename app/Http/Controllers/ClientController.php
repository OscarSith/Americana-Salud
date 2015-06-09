<?php namespace Nutri\Http\Controllers;

use Nutri\Http\Requests;
use Nutri\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Nutri\Client;
use Nutri\Products;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (\Session::has('product')) {
			$product = session('product');
			return view('checkout', compact('product'));
		}

		return redirect()->to('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Client::create($request->all());

		$product = Products::find($request->get('product_id'));
		\Session::forget('product');
		session(['product' => $product->toArray()]);
		return redirect()->route('checkout');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function cancelar()
	{
		\Session::forget('product');
		return redirect()->to('/');
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
