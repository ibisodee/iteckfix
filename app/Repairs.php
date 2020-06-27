<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repairs extends Model
{
    //
    protected $fillable = [			
        'category',
        'fault',
        'brand',
        'model',
        'description',
        'upload',
        'name',
        'number',
        'email',
        'address',
        'bill',
        'balance',
        'repairer',
        'pickdate',
        'delivered',
        'status',
        'pin',
        'feedback',
        'fresponse',            
        'city',
        'state',
        'amount_paid',
        'complaint',        
        'gender'
             
    ];
}
