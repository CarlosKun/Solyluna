
    <div class="form-group">
        {!! Form::label('name', 'name of property') !!}
        {!! Form::text('name', null,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('available', 'Date') !!}
        <input type="date" class="form-control" name="available">
    </div>
    <div class="form-group">
        {!! Form::label('num_bedrooms', 'Number of rooms') !!}
        {!! Form::text('num_bedrooms', null,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', ['' => 'Status', '1' => 'Available', '0' => 'Not available'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('service_id', 'Service') !!}
        {!! Form::select('service_id', (['' => 'select a Service']+ $services), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('country_id', 'Country') !!}
        {!! Form::select('country_id', (['' => 'select a Country']+ $countries), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state_id', 'State') !!}
        {!! Form::select('state_id', (['' => 'select a State']+ $states), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city_id', 'City') !!}
        {!! Form::select('city_id', (['' => 'select a City']+ $cities), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('property_type_id', 'Property type') !!}
        {!! Form::select('property_type_id', (['' => 'select a Property type']+ $property_types), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('user_id', 'Select Admin') !!}
        {!! Form::select('user_id', (['' => 'select a Admin']+ $users), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'image') !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slogan', 'Short description') !!}
        <textarea name="slogan" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Long description') !!}
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
