<?php namespace Nutri\Http\Requests;

use Nutri\Http\Requests\Request;

class ProductRequest extends Request {

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
			'name' => 'required|max:255',
			'codigo' => 'required|max:10|unique:products,codigo',
			'price' => 'required|numeric',
			'short_info' => 'required|max:255',
			'currency' => 'required|in:S,D'
		];
	}

}
