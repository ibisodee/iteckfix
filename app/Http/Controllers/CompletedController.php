<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repairs;


class CompletedController extends Controller
{  

    public function index()
    {  
       $data['repairs'] = repairs::all()->whereNotNull('status');
       return view('admin.completed_request', $data);
    }

}

