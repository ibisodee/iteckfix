<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repairs;

class PaidController extends Controller
{
    //
    public function index()
    {  
       $data['repairs'] = repairs::all()->whereNotNull('amount_paid');
       return view('admin.paid_user', $data);
    }
}
