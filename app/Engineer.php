<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    //
    protected $table = 'engineers'; 
    protected $fillable = ['name','focus','area','address','number','email','status'];
    
}
