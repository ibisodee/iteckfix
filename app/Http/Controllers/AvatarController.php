<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;

class AvatarController extends Controller
{
    //
    public function index()
    {  
      return view('avatar');
    }

    public function store(Request $request)
    {  
        request()->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'userid' => 'required|unique:avatars',            

       ]);     

       if ($files = $request->file('avatar')) {
        $destinationPath = 'public/avatar/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $userid = $request->input('userid');
        $insert['image'] = $profileImage;        
        $insert['userid'] = "$userid";

        
     }
     $check = Avatar::insertGetId($insert);

     return view('/profile')->withSuccess('Great! Image has been successfully uploaded.');

    }
}
