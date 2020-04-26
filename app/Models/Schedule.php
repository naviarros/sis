<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    protected $primaryKey = 'schedule_id';

    protected $fillable = [
        'day',
        'time_s',
        'time_e'
    ];

    public $timestamps = false;

    public function subjects()
    {
    	return $this->belongsTo('App\Models\Subjects', 'strand_subj_id');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Models\Teachers', 'instructor_id');
    }

    public function rooms(){
        return $this->belongsTo('App\Models\Rooms', 'room_id');
    }
}
