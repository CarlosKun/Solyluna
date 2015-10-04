<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class CreatePropertyRequest extends Request {

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
			'name' => 'required',
			'available' => 'required',
			'status' => 'required',
			'num_bedrooms' => 'required',
			'description' => 'required',
			'slogan' => 'required',
			'service_id' => 'required',
			'country_id' => 'required',
			'state_id' => 'required',
			'city_id' => 'required',
			'image' => 'required',
			'property_type_id' => 'required',
			'user_id' => 'required',
		];
	}

}
