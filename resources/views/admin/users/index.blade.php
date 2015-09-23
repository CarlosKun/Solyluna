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
                        <h3>Users</h3>
                        <p>
                            <a href="{{ route('admin.users.create') }}" class="btn btn-info" role="button">Nuevo usuario</a>
                        </p>
                        @include('admin.users.partial.table')
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
