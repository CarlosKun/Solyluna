<?php namespace solyluna\Http\Controllers\Property;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use solyluna\Bedroom;
use solyluna\Country;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreatePropertyRequest;
use solyluna\Http\Requests\CreateUserRequest;
use solyluna\Http\Requests\EditPropertyRequest;
use solyluna\Property;
use solyluna\User;

class PropertiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$properties = Property::select('id', 'name', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
			->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
			->orderBy('name', 'ASC')
			->get();
		$properties = Property::paginate();
		return view('admin.properties.index',compact('properties','service','state', 'city', 'property_type', 'user'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$id_realstate = Auth::user()->id;

		$countries = \DB::table('countries')->lists('country', 'id');
		$states = \DB::table('states')->lists('state', 'id');
		$cities= \DB::table('cities')->lists('city', 'id');
		$services= \DB::table('services')->lists('service', 'id');
		$property_types= \DB::table('property_types')->lists('property_type', 'id');
		$users= \DB::table('users')->lists('full_name', 'id');
		return view('admin.properties.create',compact('countries', 'states', 'cities','services', 'property_types','users', 'id_realstate'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePropertyRequest $request, Redirector $redirect)
	{

		$file = Input::file('image');
		if(Input::hasFile('image'))
		{
			$fileName = $file->getClientOriginalName();
			$path = public_path().'\uploads\\';

			$properties = new Property($request->all());
			$properties->image = $fileName;
			if($file->move($path, $fileName))
			{
				//return dd($properties);
				$properties->save();
				return $redirect->route('admin.control.index');
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$user_id = Auth::user()->id;
		$user_role = User::findOrfail($user_id);
		$properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
			->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
			->orderBy('name', 'ASC')
			->get();
		//return dd($properties);
		return view('admin.properties.show',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$properties = Property::findOrFail($id);

		$countries = \DB::table('countries')->lists('country', 'id');
		$states = \DB::table('states')->lists('state', 'id');
		$cities= \DB::table('cities')->lists('city', 'id');
		$services= \DB::table('services')->lists('service', 'id');
		$property_types= \DB::table('property_types')->lists('property_type', 'id');
		$users= \DB::table('users')->lists('full_name', 'id');
		return view('admin.properties.edit',compact('properties', 'countries', 'states', 'cities','services', 'property_types','users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPropertyRequest $request ,$id )
	{
		$property = Property::findOrFail($id);
		$property->fill($request->all());
		$property->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		{
			$property = Property::findOrFail($id);
			$property->delete();
			$message = $property->name.' Fue eliminado de nuestros registros';
			if($request->ajax()){
				return response()->json([
					'id' => $property->id,
					'message' => $message
				]);
			}

			Session::flash('message', $property->id. " Fue eliminado de nuestros registros");
			return redirect()->route('admin.properties	.index');
		}
	}

}
