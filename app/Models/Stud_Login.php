<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Stud_Login extends Model
{

    protected $guard = 'students';

    protected $table = 'std_login';

    protected $primaryKey = 'std_loginid';

    protected $fillable = 
    [
    	'username',
    	'password',
        'emailAddress',
        'verifyToken'
    ];

    public $timestamps = false;

    public function student(){
        return $this->belongsTo('App\Models\Students', 'std_loginid');
    }
}
