<?php namespace Nutri\Http\Requests;

use Nutri\Http\Requests\Request;

class SendOrderRequest extends Request {

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
			'full_name' => 'required|max:255',
			'telefono1' => 'required|max:20',
			'direccion' => 'required|max:255',
			'referencia' => 'required|max:255',
			'ciudad' => 'required|max:50',
			'pais' => 'required|max:50',
		];
	}

}
