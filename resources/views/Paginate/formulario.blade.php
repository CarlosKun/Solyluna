{!! Form::open(['route' => 'form_path', 'method' => 'post']) !!}
{{-- Pais Form Input --}}
<div class="form-group">
    {!! Form::label('pais' , 'Pais: ', ['class' => 'control-label']) !!}
    {!! Form::select('pais', $paises , null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Seleccionar', ['class'=> 'btn btn-primary btn-block']) !!}
</div>
{!! Form::close() !!}