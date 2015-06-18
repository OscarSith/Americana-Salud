<?php namespace Nutri\Http\Controllers;

use Nutri\Http\Requests\ClientRequest;
use Nutri\Http\Requests\SendOrderRequest;
use Nutri\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nutri\Client;
use Nutri\Products;
use Nutri\Pedido;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('product')) {
			$product = session('product');
			$paises = ['' => 'Seleccionar', 'PERÚ' => 'Perú', 'EEUU' => 'EEUU', 'COLOMBIA' => 'Colombia', 'BOLIVIA' => 'Bolivia', 'ECUADOR' => 'Ecuador', 'ARGENTINA' => 'Argentina', 'VENEZUELA' => 'Venezuela', 'BRASIL' => 'Brasil', 'CUBA' => 'Cuba'];
			return view('checkout', compact('product', 'paises'));
		}

		return redirect()->to('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, ClientRequest $req)
	{
		$client = Client::create($request->all());
		session(['client' => $client]);
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
		$this->destroySession();
		return redirect()->to('/');
	}

	public function show()
	{
		if (Session::has('client') ) {
			return redirect()->route('checkout');
		}

		if (Session::has('product')) {
			$quanty = session('quanty');
			$product = session('product');
			return view('register-client', compact('product', 'quanty'));
		}

		return redirect()->to('/');
	}

	public function sendOrder(Request $request, SendOrderRequest $v)
	{
		$data = $request->all();
		$pedido = new Pedido();
		if($pedido->add($data)) {
			\Mail::send('emails.send-order', $data, function($message) {
				$message->to('ventas@nutriamerican', 'Nutriamerican');
				$message->subject('Pedido desde la web de www.nutriamerican.com');
			});
			$this->destroySession();
			return redirect()->to('/')->with('successModal', 'Su solicitud ha sido enviada, en breve le atenderemos.');
		}

		return redirect()->back()->with('error', 'Ups, no se pudo procesar su solicitud, intentelo de nuevo');
	}

	/**
	 * Remove the session.
	 */
	public function destroySession()
	{
		Session::forget('product');
		Session::forget('quanty');
		Session::forget('client');
	}

}
