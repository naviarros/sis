<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $table = 'grades';

    protected $primaryKey = 'grade_id';

    protected $fillable = [
        'student_id',
        'subject_id',
        'instructor_id',
        'section_mid',
        'grade_status',
        'grading_period',
        'grade_level',
        'start_schyr',
        'final_grade',
        'mid_grade',
        'average_grade'
    ];

    public $timestamps = false;

    public function subjects()
    {
         return $this->belongsTo('App\Models\Subj_Maint', 'subject_id');
    }


    public function sub(){
        return $this->hasMany('App\Models\section_sub', 'instructor_id');
    }

    public function students()
    {
        return $this->belongsTo('App\Models\Students', 'student_id');
    }
    public function section()
    {
        return $this->belongsTo('App\Models\Sect_Maintenance','section_mid');
    }
    public function teacher()
    {
       return  $this->belongsTo('App\Models\Teachers','instuctor_id');
    }
}
