<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Summer extends Model
{
    //
    protected $table = 'summer';

    protected $primaryKey = 'summer_id';

    protected $fillable = [
    	'student_id',
    	'section_subj_id'
    ];

    public $timestamps = false;

    public function sectionsub(){
    	return $this->belongsTo('App\Models\section_sub', 'section_subj_id');
    }
}
