<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sect_Maintenance extends Model
{
    protected $table = 'section_maint';

    protected $primaryKey = 'section_mid';

    protected $fillable = [
        'strand_id',
        'instructor_id',
    	'section_description',
        'grade_level',
        'start_schyr',
        'end_schyr',
        'semester',
        'status'
    ];

    public $timestamps = false;

    public function strand(){
    	return $this->belongsTo('App\Models\Strands', 'strand_id');
    }

    public function instructor(){
        return $this->belongsTo('App\Models\Teachers', 'instructor_id');
    }

    public function subject(){
        return $this->hasMany('App\Models\section_sub', 'section_mid');
    }

    public function subj(){
        return $this->belongsTo('App\Models\section_sub', 'section_mid');
    }

    public function student(){
        return $this->hasOne('App\Models\Students', 'section_mid');
    }

    public function students(){
        return $this->belongsToMany('App\Models\Students');
    }

    public function grades(){
        return $this->hasMany('App\Models\Grades');
    }

    public function attendance(){
        return $this->hasMany('App\Models\Attendance');
    }
}
