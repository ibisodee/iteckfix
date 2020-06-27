<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineer;
use App\Repairs;

class AdmindashboardController extends Controller
{
    //
    public function indexengr()
    {  
        $engineers = Engineer::all();
        return view('admin.admindashboard', compact('engineers'));
    }

    
}
