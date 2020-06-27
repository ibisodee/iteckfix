<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    //
    protected $fillable = [			
      'track_id',
      'status1',           
      's1date'
           
  ];
    public static function getuserData($id=0){
        
            if($id==0){
              $value=DB::table('tracks')->orderBy('id', 'asc')->get(); 
            }else{
              $value=DB::table('tracks')->where('id', $id)->first();
            }
            return $value;
          }
        
          public static function insertData($data){
            $value=DB::table('tracks')->where('id', $data['id'])->get();
            if($value->count() == 0){
              DB::table('tracks')->insert($data);
              return 1;
             }else{
               return 0;
             }
         
          }
        
          public static function updateData($id,$data){
            DB::table('tracks')
              ->where('id', $id)
              ->update($data);
          }
        
          public static function deleteData($id){
            DB::table('tracks')->where('id', '=', $id)->delete();
          }
         
        }
