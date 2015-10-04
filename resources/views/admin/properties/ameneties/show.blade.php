@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Properties</a>
@endsection

@section('add')
    <div class="row">
        @foreach($properties as $property)
            <div class="col s12 m4 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('uploads') }}/{{ $property->image }}" height="180px">
                        <span class="card-title">{{ $property->name }}</span>
                    </div>
                    <div class="card-content">

                        <li><b>Bedrooms: </b> {{ $property->num_bedrooms }}</li>
                        <li><b>Services: </b> {{ $property->service->service }}</li>
                        <li><b>Available rooms: </b></li>
                        <li><b>Type: </b> {{ $property->property_type->property_type }}</li>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.ameneties.edit',$property) }}" class="right-align">Edit Ameneties</a>
                      </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection