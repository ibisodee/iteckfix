<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Repairs;

class RepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $repair = DB::table('repairs')->get();
        return view('repair', ['repair' => $repair]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([            
            'category' => 'required',
            'fault' => 'required',
            'brand' => 'required',
            'name' => 'required',
            'number' => 'required',
            
            'address' => 'required'
                        
        ]);

        $repair = new Repairs([
            
            'category' => $request->get('category'),
            'fault' => $request->get('fault'),
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'description' => $request->get('description'), 
            'name' => $request->get('name'),
            'number' => $request->get('number'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),        
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'pickdate' => $request->get('pickdate')

        ]);

        $repair->save();
        return redirect('/login')->with('success', 'Request has been Submitted to Our Repair Team, We would contact You Shortly, Login to Your Portal to view More Options');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
