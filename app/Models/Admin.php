<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
	protected $guard = 'admin';

    protected $table = 'admin';

    protected $primaryKey = 'admin_id';

    protected $fillable = [
    	'admin_uname',
    	'admin_pword',
    	'email'
    ];

    public $timestamps = false; 
}
