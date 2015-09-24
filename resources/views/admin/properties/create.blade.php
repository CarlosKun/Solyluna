@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Property create</div>

                    <div class="panel-body">
                        @include('admin.users.partial.messages')
                        {!! Form::open(['route' => 'admin.properties.store', 'method' => 'POST' , 'files' => 'true', 'class' => '' ]) !!}
                        @include('admin.properties.partial.form')
                        <button type="submit" class="btn btn-success">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection