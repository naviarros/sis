<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = 'trackcode';

    protected $primaryKey = 'track_id';

    protected $fillable = [
    	'track_description'
    ];

    public $timestamps = false;

    public function strand(){
        return $this->hasOne('App\Models\Track', 'track_id');
    }
}
