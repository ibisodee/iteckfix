<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Repairs;

class TransactionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {  
       $number = $request->input('number'); 
       $data['transaction'] = repairs::all()->where('number',  $number)->whereNotNull('amount_paid');
       $data['sum'] = repairs::all()->where('number',  $number)->sum('amount_paid');
       $data['balance'] = repairs::all()->where('number',  $number)->sum('bill');
       
       return view('transaction', $data);
    }  
}
