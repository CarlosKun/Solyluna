@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($properties as $house)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('uploads') }}/{{ $house->image }}" alt="..." width="" height="">
                    <div class="caption">
                        <h3>{{ $house->bedroom_asigned }}</h3>
                        @if($house->status == 1)
                            <p class="alert-success">Available</p>
                        @else
                            <p class="alert-danger">Not available</p>
                        @endif
                        <p>Beds: {{ $house->beds }}</p>
                        <p>size: {{ $house->size_metrics }}</p>
                        <p>{{ $house->description }}</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection