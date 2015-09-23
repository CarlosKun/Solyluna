<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

    protected $fillable = ['name', 'available', 'status', 'num_bedrooms', 'description', 'service_id', 'country_id', 'state_id', 'city_id', 'property_type_id', 'user_id'];

    public function country()
    {
        return $this->belongsTo('solyluna\Country');
    }
    public function state()
    {
        return $this->belongsTo('solyluna\State');
    }
    public function city()
    {
        return $this->belongsTo('solyluna\City');
    }
    public function service()
    {
        return $this->belongsTo('solyluna\Service');
    }
    public function property_type()
    {
        return $this->belongsTo('solyluna\PropertyType');
    }
    public function user()
    {
        return $this->belongsTo('solyluna\User');
    }
    public function bedroom()
    {
        return $this->hasOne('solyluna\Bedroom');
    }

}
