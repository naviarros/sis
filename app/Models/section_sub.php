<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class section_sub extends Model
{
    protected $table = 'section_subj';

    protected $primaryKey = 'section_subj_id';

    protected $fillable = [
    	'grade_level',
        'section_mid',
        'strand_id',
        'instructor_id',
        'subject_id',
        'prerequisite',
        'semester',
        'sch_yr',
        'room1',
        'room2'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function strands()
    {
    	return $this->belongsTo('App\Models\Strands', 'strand_id');
    }

    public function grade(){
    	return $this->belongsToMany('App\Models\Grade', 'instructor_id');
    }

    public function instructor(){
        return $this->belongsTo('App\Models\Teachers', 'instructor_id');
    }

    public function schedule()
    {
    	return $this->hasOne('App\Models\Schedule', 'strand_subj_id');
    }

    public function sect(){
        return $this->hasOne('App\Models\Sect_Maintenance', 'section_mid');
    }

    public function section(){
        return $this->belongsTo('App\Models\Sect_Maintenance', 'section_mid');
    }

    public function rooms(){
        return $this->belongsTo('App\Models\Rooms', 'room_id');
    }

    public function subject(){
        return $this->belongsTo('App\Models\Subj_Maint', 'subject_id');
    }

    public function summersub()
    {
        return $this->hasMany('App\Models\Summer', 'section_subj_id');
    }
}
