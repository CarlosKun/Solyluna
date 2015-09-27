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
                    <img src="/uploads/{{ $property->image }}" height="180px">
                    <span class="card-title">{{ $property->name }}</span>
                </div>
                <div class="card-content">
                    @if($property->status == 0)
                    <li><p class="red-text">Not available</p></li>
                        @else
                        <li><p class="green-text accent-4">Available</p></li>
                    @endif
                    <li><b>Bedrooms: </b> {{ $property->num_bedrooms }}</li>
                    <li><b>Services: </b> {{ $property->service->service }}</li>
                    <li><b>Available rooms: </b></li>
                    <li><b>Type: </b> {{ $property->property_type->property_type }}</li>
                </div>
                <div class="card-action">
                    <a href="#" class="right-align"><i class="material-icons">perm_media</i></a>
                    <a href="{{ route('admin.properties.bedrooms.index',$property) }}" class="right-align"><i class="material-icons">visibility</i></a>
                    <a href="{{ route('admin.properties.bedrooms.create',$property) }}" class="right-align"><i class="material-icons">note_add</i></a>
                    <a href="{{route('admin.properties.edit',$property)}}" class="right-align"><i class="material-icons">settings</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection