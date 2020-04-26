<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcement';

    protected $primaryKey = 'announcement_id';
    
    protected $fillable=[
    	'title',
        'description',
        'sendto'
    ];


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

 

}
