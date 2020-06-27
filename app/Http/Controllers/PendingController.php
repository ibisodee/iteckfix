<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repairs;

class PendingController extends Controller
{
    //
    public function index()
    {  
       $data['repairs'] = repairs::all()->whereNull('status');
       return view('admin.pending_request', $data);
    }
}