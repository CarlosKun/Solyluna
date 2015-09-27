@extends('app')

@section('content')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Usuario</div>

                    <div class="panel-body">
                        @include('admin.users.partial.messages')
                        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => '' ]) !!}
                        @include('admin.users.partial.form')
                        <button type="submit" class="btn btn-success">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

@endsection