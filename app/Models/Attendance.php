<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';

    protected $primaryKey = 'attendance_id';
    
    protected $fillable=[
    	'qr_id',
        'time_in',
        'subject_id',
        'date',
        'section_mid',
        'instructor_id',
        'semester',
        'status'
    ];


    public $timestamps = false;

    public function student(){
    	return $this->belongsTo('App\Models\Qrcode','qr_id');
    	
    }
    public function teacher(){
        return $this->hasMany('App\Models\Teachers','instructor_id');
    }
    public function subject(){
        return $this->belongsTo('App\Models\Subj_Maint','subject_id');
    }
    public function section(){
        return $this->belongsTo('App\Models\Sect_Maintenance','section_mid');
    }

}
