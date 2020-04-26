<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher_Login extends Model
{
    protected $table = 'teacher_login';

    protected $primaryKey = 'ins_loginid';

    protected $fillable = [
    	'username',
        'password',
        'verifyToken',
        'email'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function teacher(){
    	 return $this->hasOne('App\Models\Teachers', 'ins_loginid');
    }
}
