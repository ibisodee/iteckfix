<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public static function getuserData($id=0){
        
            if($id==0){
              $value=DB::table('repairs')->orderBy('id', 'asc')->get(); 
            }else{
              $value=DB::table('repairs')->where('id', $id)->first();
            }
            return $value;
          }
        
          public static function insertData($data){
            $value=DB::table('repairs')->where('id', $data['id'])->get();
            if($value->count() == 0){
              DB::table('repairs')->insert($data);
              return 1;
             }else{
               return 0;
             }
         
          }
        
          public static function updateData($id,$data){
            DB::table('repairs')
              ->where('id', $id)
              ->update($data);
          }
        
          public static function deleteData($id){
            DB::table('repairs')->where('id', '=', $id)->delete();
          }
         
        }
