<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCode extends Model
{
    protected $table = 'qrcodes';

    protected $primaryKey = 'qr_id';

    protected $fillable = [
    	'qrContent',
    	'qrImg',
    	'qrLink'
    ];

    public $timestamps = false;

    public function students(){
        return $this->hasOne('App\Models\Students', 'qr_id');
    }
     public function attendance(){
        return $this->belongsTo('App\Models\Attendance','qr_id','qr_id');
        
    }
  }
