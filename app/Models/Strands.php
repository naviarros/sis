<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strands extends Model
{
    protected $table = 'strands';

    protected $primaryKey = 'strand_id';

    protected $fillable = [
        'track_id',
    	'strand_code',
    	'description'
    ];

    public $timestamps = false;

    public function track(){
        return $this->belongsTo('App\Models\Track', 'track_id');
    }

    public function subject(){
    	return $this->hasOne('App\Models\section_sub', 'strand_id');
    }

    public function sections(){
        return $this->hasOne('App\Models\Sect_Maintenance','strand_id');
    }

    public function curriculum(){
        return $this->hasOne('App\Models\Curriculum', 'strand_id');
    }

    public function student(){
        return $this->hasOne('App\Models\Students', 'strand_id');
    }
}
