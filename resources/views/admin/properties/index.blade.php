@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin</div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }}</p>
                        @endif
                        <h3>Properties</h3>
                        <p>
                            <a href="{{ route('admin.properties.create') }}" class="btn btn-info" role="button">Add property</a>
                        </p>
                        @include('admin.properties.partial.table')
                        {!! $properties->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
