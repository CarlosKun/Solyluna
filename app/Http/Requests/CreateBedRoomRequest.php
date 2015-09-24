<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class CreateBedRoomRequest extends Request {

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
			'bedroom_asigned' => 'required',
			'status' => 'required',
			'size_metrics' => 'required',
			'beds' => 'required',
			'description' => 'required',
			'image' => 'required',
			'property_id' => 'required'
		];
	}

}
