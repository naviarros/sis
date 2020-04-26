<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tch_Req extends Model
{
    protected $table = 'tch_req';

    protected $primaryKey = 'tch_req';
 
    protected $fillable = [
        'sss',
        'pagibig',
        'philhealth',
        'prc_no',
        'resume_filename',
        'file_path'
    ];

    protected $dates = ['date_passed', 'license_expire'];
    
    public $timestamps = false;

    public function teacher(){
        return $this->hasOne('App\Models\Teachers', 'tch_req');
    }
}
