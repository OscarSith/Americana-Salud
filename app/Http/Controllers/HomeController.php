<?php namespace Nutri\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nutri\Products;
use Nutri\ProductImages;

class HomeController extends Controller {

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

	public function productos()
	{
		$products = Products::activePaginator();
		return view('products', compact('products'));
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

	public function sendContact(Request $request)
	{
		$this->validate($request, [
			'nombre' => 'required|max:255',
			'correo' => 'required|email',
			'consulta' => 'required|min:5',
		]);

		\Mail::send('emails.send-contact', $request->all(), function($message) {
			$message->to('ventas@nutriamerican.com', 'Nutriamerican');
			$message->subject('Enviaron una CONSULTA desde la web de www.nutriamerican.com');
		});

		return redirect()->back()->with('success', 'Su consulta ha sido enviada con exito.');
	}

	public function addCart(Request $request) {
		$product = Products::find($request->input('product_id'));

		$data = null;
		$productArray = $product->toArray();
		$productArray['quantity'] = $request->input('quantity');

		if (Session::has('cart') && session('cart')->count() > 0) {
			$data = session('cart');
		} else {
			$data = collect();
		}
		$data->push($productArray);

		Session::put('cart', $data);

		return redirect()->back()->with('success', 'Producto agregado al Carrito');
	}

	public function listCart() {
		$productsInCart = Session::get('cart');

		return view('cart-list', compact($productsInCart));
	}

	public function deleteItemCart(Request $request) {
		$list = session('cart');
		$id = $request->input('id');

		foreach ($list as $n => $item) {
			if ($item['id'] == $id) {
				$list->forget($n);
				break;
			}
		}

		return redirect()->back();
	}
}
