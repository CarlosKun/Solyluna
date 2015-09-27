    <div class="form-group">
        {!! Form::label('first_name', 'name(s)') !!}
        {!! Form::text('first_name', null,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'last_name') !!}
        {!! Form::text('last_name', null,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-Mail Address') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Escribe tu direccion de correo '] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telephone', 'Telephone') !!}
        {!! Form::text('telephone', null, ['class' => 'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cellphone', 'Cellphone') !!}
        {!! Form::text('cellphone', null, ['class' => 'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Password') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role', 'Role') !!}
        {!! Form::select('role', ['' => 'Seleccione tipo', 'admin' => 'Administrador', 'contact_person' => 'Contact Person', 'realstate' => 'Real State'], null, ['class' => 'form-control']) !!}
    </div>