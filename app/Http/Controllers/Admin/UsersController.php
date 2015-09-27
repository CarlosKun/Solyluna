<?php namespace solyluna\Http\Controllers\Admin;

use Illuminate\Routing\Redirector;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;
use solyluna\Http\Requests\CreateUserRequest;

use Illuminate\Http\Request;

use solyluna\User;

class UsersController extends Controller {

	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$users = User::paginate();
		//return view('admin.users.index', compact('users'));
		return view('admin.users.admin');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request, Redirector $redirect)
	{
		//otra manera de incertar sin esperar parametros
		//$user = User::create(Request::all());
		//redirect->()->route('admin.users.index');
		$user = new User($request->all());
		$user->full_name = $request->first_name." ".$request->last_name;
		$user->save();
		return $redirect->route('admin.users.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
		$user->fill(\Request::all());
		$user->full_name = $user->first_name." ".$user->last_name;
		$user->save();

		return redirect()->route('admin.users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		Session::flash('message', $user->full_name.' fue eliminado correctamente');

		return redirect()->route('admin.users.index');
	}

}
