<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class File extends Model {
    protected $fillable = [ 'property_id','menu','drinks','activities'];

    public function property()
    {
        return $this->belongsTo('solyluna\Property');
    }

    //

}
