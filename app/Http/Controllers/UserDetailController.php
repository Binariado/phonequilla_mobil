<?php

namespace App\Http\Controllers;
use App\User;
use App\User_detail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
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
        if ($request->isMethod('post')) {
            $user_update=User::where('id',$request->id)->first();
            $user_update->name=$request->name;
            $user_update->email=$request->email;
            $user_update->save();
            $user_update_detail=User_detail::where('user_id',$request->id)->first();
            $user_update_detail->name=$request->name;
            $user_update_detail->username=$request->name;
            $user_update_detail->birthday=$request->birthday;
            $user_update_detail->birthplace=$request->birthplace;
            $user_update_detail->gender=$request->gender;
            $user_update_detail->phone=$request->phone;
            $user_update_detail->landline=$request->landline;
            $user_update_detail->document=$request->document;
            $user_update_detail->current_place=$request->current_place;
            $user_update_detail->save();
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function show(User_detail $user_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(User_detail $user_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_detail $user_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_detail $user_detail)
    {
        //
    }
}
