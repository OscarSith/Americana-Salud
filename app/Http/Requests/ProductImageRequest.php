<?php namespace Nutri\Http\Requests;

use Nutri\Http\Requests\Request;

class ProductImageRequest extends Request {

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
			'img' => 'required|image|mimes:jpeg,jpg,bmp,png',
			'product_id' => 'required|integer'
		];
	}

}
