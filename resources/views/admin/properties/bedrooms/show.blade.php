@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Bedrooms</a>
@endsection

@section('add')
    <div class="row">
        @foreach($properties as $house)
            <div class="col s12 m4 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="/uploads/{{ $house->image }}" height="180px">
                        <span class="card-title">{{ $house->bedroom_asigned }}</span>
                    </div>
                    <div class="card-content">
                        @if($house->status == 0)
                            <li><p class="red-text">Not available</p></li>
                        @else
                            <li><p class="green-text accent-4">Available</p></li>
                        @endif
                        <li><b>Beds: </b> {{ $house->beds }}</li>
                        <li><b>Measures: </b> {{ $house->size_metrics }}</li>
                        <p>{{ $house->description }}</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="right-align"><i class="material-icons">perm_media</i></a>
                        <a href="{{ route('admin.properties.bedrooms.index',$house) }}" class="right-align"><i class="material-icons">visibility</i></a>
                        <a href="{{ route('admin.properties.bedrooms.create',$house) }}" class="right-align"><i class="material-icons">note_add</i></a>
                        <a href="{{route('admin.properties.edit',$house)}}" class="right-align"><i class="material-icons">settings</i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection