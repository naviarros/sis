<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollment';

    protected $primaryKey = 'enrollment_id';

    protected $fillable = [
    	'strand_id',
    	'semester',
    	'grade_level',
    	'status'
    ];

    public $timestamps = false;
    
}
