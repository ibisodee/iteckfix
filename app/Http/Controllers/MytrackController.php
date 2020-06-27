<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Track;

class MytrackController extends Controller
{
    //
    public function index(Request $request)
    {        
        // Fetch all records 
        $track_id = $request->input('track_id');      
        $userData['data'] = Track::getuserData()->where('track_id', $track_id);        
        // Fetch edit record        
        return view('track')->with("userData",$userData);
    }   
    
}