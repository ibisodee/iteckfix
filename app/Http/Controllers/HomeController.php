<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function update()
    {
        return view('update');
    }
    public function avatar()
    {
        return view('avatar');
    }
    public function allrequest()
    {
        return view('allrequest');
    }
    public function transaction()
    {
        return view('transaction');
    }
    public function helpdesk()
    {
        return view('helpdesk');
    }
    public function complaint()
    {
        return view('complaint');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function list()
    {
        return view('list');
    }



    public function admin()
    {
        return view('admin');
    }
    public function admindashboard()
    {
        return view('admin.admindashboard');
    }
    public function assign_technician()
    {
        return view('admin.assign_technician');
    }
    public function track_details()
    {
        return view('admin.track_details');
    }
    public function support_message()
    {
        return view('admin.support_message');
    }
    public function payment_reminder()
    {
        return view('admin.payment_reminder');
    }
    public function register_engineer()
    {
        return view('admin.register_engineer');
    }
    public function pending_request()
    {
        return view('admin.pending_request');
    }
    public function completed_request()
    {
        return view('admin.completed_request');
    }
    public function registered_user()
    {
        return view('admin.registered_user');
    }
    public function paid_user()
    {
        return view('admin.paid_user');
    }
    public function accredited_engineers()
    {
        return view('admin.accredited_engineers');
    }
    
    
}
