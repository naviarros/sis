<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculum';

    protected $primaryKey = 'curriculum_id';

    protected $fillable = [
    	'strand_id',
    	'grade_level',
        'subject_id',
    	'semester',
    	'sch_yr'
    ];

    public $timestamps = false;

    public function strands(){
    	return $this->belongsTo('App\Models\Strands', 'strand_id');
    }

    public function subject(){
        return $this->belongsTo('App\Models\Subj_Maint', 'subject_id');
    }
}
