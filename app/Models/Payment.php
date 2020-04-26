<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    protected $primaryKey = 'payment_id';

    protected $fillable = [
    	'or_number',
    	'debit',
    	'credit',
        'balance',
        'payment_method',
        'payment_type',
        'school_type'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function student(){
        return $this->hasOne('App\Models\Students', 'payment_id');
    }
}
