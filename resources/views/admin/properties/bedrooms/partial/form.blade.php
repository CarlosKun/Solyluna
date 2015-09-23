    <div class="form-group">
        {!! Form::hidden('property_id', $bedroom->id,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bedroom_asigned', 'Name of bedroom') !!}
        {!! Form::text('bedroom_asigned', null,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', ['' => 'Status', '1' => 'Available', '0' => 'Not available'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('beds', 'beds') !!}
        {!! Form::select('beds', ['' => 'Seleccione #', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10',], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('size_metrics', 'Measures') !!}
        {!! Form::text('size_metrics', null,  ['class' => 'form-control']) !!}
    </div>
