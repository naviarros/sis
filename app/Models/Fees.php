<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    protected $table = 'school_fees';

    protected $primaryKey = 'fee_id';

    protected $fillable = [
    	'registration_fee',
    	'id_fee',
    	'guidance_fee',
    	'athletic_fee',
    	'medical_fee',
    	'breakage_fee',
    	'development_fee',
    	'energy_fee',
    	'insurance_fee',
    	'lab_fee',
    	'nstp_fee',
    	'tuition_fee'
    ];

    public $timestamps = false;
}
