<?php namespace Nutri\Http\Requests;

use Nutri\Http\Requests\Request;

class ClientRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombres' => 'required|max:255',
			'apellido' => 'required|max:150',
			'telefono' => 'required|max:20',
			'correo' => 'required|email', //|unique:clients,correo
			'direccion' => 'required|max:255',
			'terminos' => 'accepted',
			'cantidad' => 'required|numeric'
		];
	}

}
