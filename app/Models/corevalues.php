<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class corevalues extends Model
{
    protected $table ='corevalues';

    protected $primaryKey='corevalues_id';

    protected $foreignKey='student_id';
    protected $fillable =[
        'student_id',
        'grade_level',
        'grading',
        'makadiyos1',
        'makadiyos2',
        'makatao1',
        'makatao2',
        'makakalikasan',
        'makabansa1',
        'makabansa2'

    ];

    public $timestamps = false;

    public function student(){
        return $this->belongsTo('App\Models\Students','student_id');
    }
}
