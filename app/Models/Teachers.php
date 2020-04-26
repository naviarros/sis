<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'instructor_id';

    protected $fillable = [
    	'lastname',
    	'firstname',
    	'middlename',
    	'suffixname',
    	'age',
    	'address',
        'gender',
        'city',
        'municipality',
        'placeofbirth',
        'email',
    	'barangay',
        'contact',
        'nationality',
        'region',
        'zipcode',
        'civil_status',
        'spouse_lname',
        'spouse_fname',
        'spouse_mname',
        'no_of_child',
        'spouse_occupation',
        'mlname',
        'mfname',
        'mmiddle',
        'mocc',
        'mcontact',
        'flname',
        'ffname',
        'fmname',
        'sfx_name',
        'f_occ',
        'fcontact',
        'elem_schname',
        'hs_schname',
        'clg_schname',
        'clg_crse',
        'mstrs_schname',
        'mstrs_taken',
        'dctr_schname',
        'dctr_crse',
        'cmp_name',
        'experience',
        'position',
        'spclty',
        'elem_gradyr',
        'hs_gradyr',
        'clg_gradyr',
        'mstrs_gradyr',
        'dctr_gradyr',
        'status'
    ];

    protected $dates = ['bday', 'spouse_bday'];

    public $timestamps = true;

    public function emp(){
    	return $this->belongsTo('App\Models\Teacher_Login', 'ins_loginid');
    }

    public function req(){
        return $this->belongsTo('App\Models\Tch_Req', 'tch_req');
    }

    public function sch(){
        return $this->hasOne('App\Models\Schedule', 'instructor_id');
    }

    public function sect(){
        return $this->hasOne('App\Models\Sect_Maintenance', 'instructor_id');
    }

    public function subj(){
        return $this->hasOne('App\Models\section_sub', 'instructor_id');
    }

    public function grades(){
        return $this->hasMany('App\Models\Grades');
    }
}

