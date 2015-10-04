<div class="row">
    <div class="row">
        <div class="input-field col s12">
            <select name="category">
                <option value="" disabled selected>Choose your option</option>
                <option value="Special amenities">Special Amenities</option>
                <option value="Services">Services</option>
                <option value="Technology">Technology</option>
            </select>
            <label for="category">Category</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input placeholder="Amenity" name="amenity" type="text" class="validate">
            <label for="amenity">Amenity</label>
        </div>
        {!! Form::hidden('property_id', $property,  ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <center>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </center>
    </div>
</div>