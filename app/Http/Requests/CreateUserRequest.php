<?php namespace solyluna\Http\Requests;

use solyluna\Http\Requests\Request;

class CreateUserRequest extends Request {

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
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|unique:users,email', //users es la tabla e email la columna
			'telephone' => 'required|unique:users,telephone',
			'cellphone' => 'required|unique:users,cellphone',
			'role' => 'required',
			'password' => 'required'
		];
	}

}
