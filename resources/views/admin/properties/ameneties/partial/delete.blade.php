{!! Form::open(['route' => ['admin.properties.destroy', $properties], 'method' => 'DELETE' ]) !!}
<button type="submit" onclick="return confirm('Seguro que desea la propiedad')" class="btn btn-danger">Eliminar usuario</button>
{!! Form::close() !!}