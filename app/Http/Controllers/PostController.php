<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repairs;


class PostController extends Controller
{  

    public function index()
    {  
       $data['repairs'] = repairs::all();
       return view('admin.completed_request', $data);
    }

}