<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parent';

    protected $primaryKey = 'parent_id';

    protected $fillable = [
    	'mother_lname',
    	'mother_fname',
    	'mother_mname',
    	'mother_occ',
    	'mother_cntact',
    	'father_lname',
    	'father_fname',
    	'father_mname',
    	'father_occ',
    	'father_cntact'
    ];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\Models\Students', 'parent_id');
    }
}
