<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
   
      public static function getuserData($id=0){
          
              if($id==0){
                $value=DB::table('tracks'); 
              }else{
                $value=DB::table('tracks')->where('id', $id)->first();
              }
              return $value;
            }
          
            public static function updateData($id,$data){
              DB::table('tracks')
                ->where('id', $id)
                ->update($data);
            }

                      
            
}
