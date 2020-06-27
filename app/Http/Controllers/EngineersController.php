<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use App\Engineer;

class EngineersController extends Controller
{
    //
    public function showEngineer()
    {
      return view('admin.register_engineer');
    }

    public function insertEngineer(Request $request)
    {
        $data = request()->validate([
        'name' => 'required',
        'address' => 'required',
        'number' => 'required',
        'email' => 'required',
        'focus' => 'required',
        'area' => 'required',
        'status' => 'required',
        ]);
       
        
        $check = Engineer::insert($data);
        return Redirect::to("admin.register_engineer")->withSuccess('Great! Form successfully submit with validation.');
    }
      
}

