<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $table = 'sections';

    protected $primaryKey = 'section_id';

    protected $fillable = [
    	'section_name',
    ];
    
    public $timestamps = false;

    public function schedule()
    {
    	$this->hasMany('App\Models\Schedule', 'schedule_id', 'section_id');
    }
}
