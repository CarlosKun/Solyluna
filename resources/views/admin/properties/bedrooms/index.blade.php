@extends('admin.control.admin')

@section('logo')
    <a href="#" class="brand-logo center">Bedrooms</a>
@endsection

@section('add')
        <div class="row">
            <div class="col s12">
                <div class="col s12 z-depth-1">
                    <h5>{{ $bedroom->name }} Bedrooms</h5>
                    <div class="divider"></div>
                    @include('admin.users.partial.messages')
                    {!! Form::open(['route' => 'admin.properties.bedrooms.store', 'method' => 'POST', 'files' => 'true', 'class' => 'col s12' ]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="hidden" name="property_id" value="{{ $bedroom->id }}" class="validate">
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="bedroom_asigned" class="validate" placeholder="Like Principal">
                            <label for="bedroom_asigned">Name of bedroom</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="status">
                                <option value="" disabled selected></option>
                                <option value="0">Not available</option>
                                <option value="1">Available </option>
                            </select>
                            <label for="status">Status</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="beds">
                                <option value="" disabled selected></option>
                                <option value="1">1</option>
                                <option value="2">2 </option>
                                <option value="3">3 </option>
                                <option value="4">4 </option>
                                <option value="5">5 </option>
                                <option value="6">6 </option>
                                <option value="7">7 </option>
                                <option value="8">8 </option>
                            </select>
                            <label for="beds">Beds</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="size_metrics" class="validate" placeholder="Like 10x15">
                            <label for="size_metrics">Measures</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" placeholder="" name="description"></textarea>
                            <label for="description">Textarea</label>
                        </div>
                        <div class="form-group">
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                        </div>
                        <center><button type="submit" class="btn waves-effect waves-light">Create</button></center>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection

