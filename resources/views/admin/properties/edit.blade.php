@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar propiedad: {{ $properties->name }}</div>
                    <div class="panel-body">
                        {!! Form::model($properties, ['route' => ['admin.properties.update', $properties], 'method' => 'PUT' ]) !!}
                        @include('admin.properties.partial.form')
                        <button type="submit" class="btn btn-info">Actualizar propiedad</button>
                        {!! Form::close() !!}
                        @include('admin.properties.partial.delete')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection