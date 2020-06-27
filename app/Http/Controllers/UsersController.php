<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Repairs;
use App\User;


class UsersController extends Controller
{
    public function index()
    {  
       $users = User::all();
       return view('admin.registered_user', compact('users'));
    }
}
