<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guardians extends Model
{
    protected $table = 'guardian';

    protected $primaryKey = 'guardian_id';

    protected $fillable = [
    	'guardian_lname',
    	'guardian_fname',
    	'guardian_mname',
    	'relation',
        'address',
        'contact',
        'email',
        'username',
        'password'
    ];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\Models\Students', 'guardian_id');
    }
}
