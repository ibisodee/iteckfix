<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Repairs;

class AllrequestController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {  
       $number = $request->input('number'); 
       $data['repairs'] = repairs::all()->where('number',  $number);
       return view('allrequest', $data);
    }  
    
}
