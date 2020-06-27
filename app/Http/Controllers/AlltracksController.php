<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Track;


class AlltracksController extends Controller
{
    //
    public function index($id=0){        
      // Fetch all records
      $userData['data'] = Track::getuserData()->whereNotNull('name');        
      $userData['edit'] = $id;
        // Fetch edit record
      if($id>0){
        $userData['editData'] = Track::getuserData($id);
      }
      return view('/admin/all_track')->with("userData",$userData);
}
}