<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model {

    protected $fillable = ['bedroom_asigned', 'status', 'size_metrics', 'size_decimal', 'beds', 'description', 'image', 'property_id'];

    public function property()
    {
        return $this->belongsTo('solyluna\Property');
    }

}
