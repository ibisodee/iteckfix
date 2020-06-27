<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Report;

class ReportsController extends Controller
{
    public function index($id=0){
        
      // Fetch all records
      $userData['data'] = Report::getuserData()->whereNull('report');        
      $userData['edit'] = $id;
        // Fetch edit record
      if($id>0){
        $userData['editData'] = Report::getuserData($id);
      }
        // Pass to view
      return view('/admin/report')->with("userData",$userData);
    }
   
    public function save(Request $request)
    {        
      if ($request->input('submit') != null )
      {
       // Update record
        if($request->input('editid') !=null )
        {
          
          $report = $request->input('report');
          $name = $request->input('name');
          $editid = $request->input('editid');
            if( $report != '' && $name != '')
          {
           $data = array("report"=>$report,"name"=>$name);
   
           // Update
           Report::updateData($editid, $data);       
           Session::flash('Report','Update successfully.');        
          } 
        }                     
      }
      return redirect()->action('ReportsController@index',['id'=>0]);
     
   } 
      
}
