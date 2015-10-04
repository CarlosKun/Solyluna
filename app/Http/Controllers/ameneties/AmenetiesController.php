<?php namespace solyluna\Http\Controllers\ameneties;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use solyluna\Bedroom;
use solyluna\Country;
use solyluna\File;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use solyluna\Http\Requests\CreatePropertyRequest;
use solyluna\Http\Requests\CreateUserRequest;
use solyluna\Http\Requests\EditPropertyRequest;
use solyluna\Http\Requests\FileRequest;
use solyluna\Property;
use solyluna\User;

class AmenetiesController extends Controller {

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
    public function store( FileRequest  $request, Redirector $redirect)
    {

        $file = Input::file('menu');
        if(Input::hasFile('menu'))
        {
            $fileName = $file->getClientOriginalName();
            $path = public_path().'\menus\\';


            $files= new File($request->all());

           $files->menu = $fileName;
            if($file->move($path, $fileName))
            {
                //return dd($menu);
                $files->save();
                return $redirect->route('admin.ameneties.edit');
            }
        }
    }
    public function storedrinks( FileRequest  $request, Redirector $redirect)
    {

        $file = Input::file('drinks');
        if(Input::hasFile('drinks'))
        {
            $fileName = $file->getClientOriginalName();
            $path = public_path().'\drinks\\';


            $files= new File($request->all());

            $files->drinks = $fileName;
            if($file->move($path, $fileName))
            {
                //return dd($menu);
                $files->save();
                return $redirect->route('admin.ameneties.edit');
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
        return view('admin.properties.ameneties.show',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);

        $properties = $id;

        $files = File::select('id')
            ->where('property_id', '=', $id)
            ->get();

        if(!empty($files))
        {
            $files= new File();
            $files->property_id = $id;
            $files->save();
        }

        return view('admin.properties.ameneties.edit',compact('properties', 'user_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $user_role = User::findOrfail($user_id);
        $properties = $request->property_id;

        $menu = $request->labelmenu;
        $drinks = $request->labeldrinks;
        $activities = $request->labelactivities;
        $id = $request->property_id;
        $files = File::select('id')
            ->where('property_id', '=', $id)
            ->get();

        if($menu == 'menu')
        {
            foreach($files as $ides)
            {
                $file = Input::file('menu');
                if(Input::hasFile('menu'))
                {
                    $fileName = $file->getClientOriginalName();
                    $path = public_path().'\menus\\';

                    if($file->move($path, $fileName))
                    {

                        $concha = File::findOrFail($ides->id);
                        $concha->menu = $fileName;
                        $concha->save();
                        return view('admin.properties.ameneties.edit', compact('user_role', 'properties'));
                    }
                }
            }
        }
        if($drinks == 'drinks')
        {
            foreach($files as $ides)
            {
                $file = Input::file('drinks');
                if(Input::hasFile('drinks'))
                {
                    $fileName = $file->getClientOriginalName();
                    $path = public_path().'\drinks\\';

                    if($file->move($path, $fileName))
                    {

                        $concha = File::findOrFail($ides->id);
                        $concha->drinks = $fileName;
                        $concha->save();
                        return view('admin.properties.ameneties.edit', compact('user_role', 'properties'));
                    }
                }
            }
        }
        if($activities == 'activities')
        {
            foreach($files as $ides)
            {
                $file = Input::file('activities');
                if(Input::hasFile('activities'))
                {
                    $fileName = $file->getClientOriginalName();
                    $path = public_path().'\activities\\';

                    if($file->move($path, $fileName))
                    {

                        $concha = File::findOrFail($ides->id);
                        $concha->activities = $fileName;
                        $concha->save();
                        return view('admin.properties.ameneties.edit', compact('user_role', 'properties'));
                    }
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {

    }

}
