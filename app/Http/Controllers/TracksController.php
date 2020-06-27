<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Track;

class TracksController extends Controller
{
    //
    public function index($id=0){
       
     // Fetch all records
     $userData['data'] = Track::getuserData()->whereNull('report');        
     $userData['edit'] = $id;
       // Fetch edit record
     if($id>0){
       $userData['editData'] = Track::getuserData($id);
     }
       // Pass to view
     return view('/admin/track_details')->with("userData",$userData);
   }
  
   public function save(Request $request)
   {        
     if ($request->input('submit') != null )
     {
      // Update record
       if($request->input('editid') !=null )
       {
         
         $status2 = $request->input('status2');
         $s2date = $request->input('s2date');
         $editid = $request->input('editid');
           if( $status2 != '' && $s2date != '')
         {
          $data = array("status2"=>$status2,"s2date"=>$s2date);
  
          // Update
          Track::updateData($editid, $data);       
          Session::flash('Phase 1 Updated','Update successfully.');        
         } 
       }                     
     }
     return redirect()->action('TracksController@index',['id'=>0]);
    
  } 
  
  public function deleteUser($id=0){
    
        if($id != 0){
          // Delete
          Track::deleteData($id);
    
          Session::flash('message','Delete successfully.');
          
        }
        return redirect()->action('TracksController@index',['id'=>0]);
      }  
         
}
