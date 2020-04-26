<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
	
	protected $table = 'students';
	protected $primaryKey = 'student_id';
	protected $fillable = [
		'strand_id',
		'section_mid',
		'student_no',
		'student_type',
		'start_schyr', 
		'end_schyr',
		'grade_level',
		'semester',
		'lastname',
		'firstname',
		'middlename',
		'age',
		'nationality',
		'gender',
		'address',
		'civil_status',
		'religion',
		'city',
		'region',
		'barangay',
		'zipcode',
		'dateofbirth',
		'mobile_no',
		'elementarySchName',
		'elemAddress',
		'elemGradYr',
		'secondarySchName',
		'secAddress',
		'secYrGrad',
		'placeofbirth',
		'status'
	];
	
	const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

	public function std_login(){
		return $this->belongsTo('App\Models\Stud_Login', 'std_loginid');
	}

	public function sects(){
		return $this->hasOne('App\Models\Sect_Maintenance');
	}

	public function stud_log(){
		return $this->hasOne('App\Models\Stud_Login', 'std_loginid');
	}

	public function strands(){
		return $this->belongsTo('App\Models\Strands', 'strand_id');
	}

	public function section(){
		return $this->belongsTo('App\Models\Sect_Maintenance', 'section_mid');
	}
	
	public function parent(){
		return $this->belongsTo('App\Models\Parents', 'parent_id');
	}

	public function guardian(){
		return $this->belongsTo('App\Models\Guardians', 'guardian_id');
	}

	public function qr(){
		return $this->belongsTo('App\Models\QrCode', 'qr_id');
	}

	public function payment(){
		return $this->belongsTo('App\Models\Payment', 'payment_id');
	}

	public function requirement(){
		return $this->belongsTo('App\Models\Requirements', 'requirement_id');
	}

	public function grades(){
		return $this->belongsTo('App\Models\Grades', 'grade_id');
	}

	public function gr(){
		return $this->belongsTo('App\Models\Grades', 'student_id');
	}

	public function corevalues(){
		return $this->hasMany('App\Models\CoreValues');
	}
}
