<?php namespace solyluna\Http\Controllers\Bedroom;


use Illuminate\Http\Request;
use solyluna\Bedroom;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreateBedRoomRequest;
use solyluna\Property;

class BedRoomController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$properties = Bedroom::select('id', 'bedroom_asigned', 'status', 'beds', 'size_metrics', 'property_id')
			->with('Property')
			->where('property_id', '=', $id)
			->get();
		$count = Bedroom::select('id', 'property_id')
			->with('Property')
			->where('property_id', '=', $id)
			->count();
		return view('admin.properties.bedrooms.show', compact('properties', 'count'));
		//dd($properties);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$bedroom = Property::findOrFail($id);
		return view('admin.properties.bedrooms.index',compact('bedroom'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateBedRoomRequest $request)
	{
		$bedroom = new Bedroom($request->all());
		$bedroom->save();
		return redirect()->route('admin.properties.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
