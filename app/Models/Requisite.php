<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisite extends Model
{
    //
    protected $table = 'requisite';

    protected $primaryKey = 'requisite_id';

    protected $fillable = [
    	'subject_id'
    ];

    public $timestamps = false;

}
