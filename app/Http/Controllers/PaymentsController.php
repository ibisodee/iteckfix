<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Payment;

class PaymentsController extends Controller
{
    //
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('admin.payment_reminder');
        }
    }
    public function index($id=0){
        
           // Fetch all records
           $userData['data'] = Payment::getuserData()->whereNull('status2');        
           $userData['edit'] = $id;
       
           // Fetch edit record
           if($id>0){
             $userData['editData'] = Payment::getuserData($id);
           }
       
           // Pass to view
           return view('/admin/payment_reminder')->with("userData",$userData);
         }
       
         public function save(Request $request){
        
           if ($request->input('submit') != null ){
       
             // Update record
             if($request->input('editid') !=null ){
               $bill = $request->input('bill');
               $repairer = $request->input('repairer');
               $editid = $request->input('editid');
       
               if($bill !='' && $repairer != ''){
               $data = array('bill'=>$bill,"repairer"=>$repairer);
        
               // Update
               Payment::updateData($editid, $data);       
               Session::flash('Bill and Repeirer','Update successfully.');
        
               }        
             }              
           }
           return redirect()->action('PaymentsController@index',['id'=>0]);
         }       
         
}
