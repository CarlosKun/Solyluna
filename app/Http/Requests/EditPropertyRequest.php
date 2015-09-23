<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class EditPropertyRequest extends Request {

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
			'available' => '',
			'status' => 'required',
			'num_bedrooms' => 'required',
			'description' => '',
			'service_id' => 'required',
			'country_id' => 'required',
			'state_id' => 'required',
			'city_id' => 'required',
			'property_type_id' => 'required',
			'user_id' => 'required'
		];
	}

}
