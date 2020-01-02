<?php

namespace App\Http\Controllers;

use App\User_address;
use App\Cities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $address=new User_address();
        $address->user_id=Auth::user()->id;
        $address->city_id=$request->city_a;
        $address->department_id=$request->department_a;
        $address->neighborhood=$request->neighborhood_a;
        $address->address=$request->address_a;
        $address->address_detail=$request->address_detail_a;
        $address->address_site=$request->address_site;
        $address->state=1;
        if($address->save()){
            return 1;
        }
        return 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User_address  $user_address
     * @return \Illuminate\Http\Response
     */

    public function show(User_address $user_address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_address  $user_address
     * @return \Illuminate\Http\Response
     */
    public function edit(User_address $user_address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_address  $user_address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_address $user_address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_address  $user_address
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_address $user_address)
    {
        //
    }
    public function cities()
    {
       return Cities::all()->groupBy("departament_id");
    }
}
