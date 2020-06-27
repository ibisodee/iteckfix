<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;


class AccreditedController extends Controller
{
    //
    public function index()
    {  
        
        $engineers = Engineer::all();
        return view('admin.accredited_engineers', compact('engineers'));
        
    }
}
