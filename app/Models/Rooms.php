<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';

    protected $primaryKey = 'room_id';

    protected $fillable = [
    	'room_name',
    	'capacity',
    	'status'
    ];

    public $timestamps = false;

    public function subject(){
    	return $this->hasOne('App\Models\section_sub', 'room_id');
    }

    public function section_sub(){
        return $this->hasMany('App\Models\section_sub');
    }
}
