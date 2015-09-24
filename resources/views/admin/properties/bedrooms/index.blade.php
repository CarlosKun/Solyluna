@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bedroom of {{ $bedroom->name }}</div>

                    <div class="panel-body">
                        @include('admin.users.partial.messages')
                        {!! Form::open(['route' => 'admin.properties.bedrooms.store', 'method' => 'POST', 'files' => 'true', 'class' => 'form-group' ]) !!}
                        @include('admin.properties.bedrooms.partial.form')
                        <button type="submit" class="btn btn-success">Create</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection