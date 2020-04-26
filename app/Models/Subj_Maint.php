<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subj_Maint extends Model
{
    protected $table = 'subjects';

    protected $primaryKey = 'subject_id';

    protected $fillable = [
    	'subject_code',
    	'subject_description',
    	'subject_type',
        'credited_units',
        'lect_hrs',
        'lab_hrs',
        'prerequisite'
    ];

    public $timestamps = false;

    public function curriculum(){
        return $this->hasOne('App\Models\Curriculum', 'subject_id');
    }

    public function sectsubj(){
        return $this->hasOne('App\Models\section_sub', 'subject_id');
    }

    public function subjsect(){
        return $this->belongsTo('App\Models\section_sub', 'subject_id');
    }

    public function grade(){
        return $this->hasOne('App\Models\Grades', 'subject_id');
    }
}
