<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Departments;
use App\Cities;
use App\ProductFavorite;
use Illuminate\Support\Facades\Crypt;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $favorites=ProductFavorite::where('user_id',Auth::user())->get();
        $departments=Departments::all();
        $products = [];
        return view("profile.index",[
            'product'=>$products,
            'departments'=>$departments,
            'favorites'=>$favorites,
        ]);
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
    public function update(Request $request, User $profile)
    {
        $profile->update($request->all());
    }

    public function password(Request $request){
     
        $user=Auth::user();
        $password=\Hash::check($request->password_old, $user->password);
        if($user){
           $user->password=\Hash::make($request->new_password);
           $user->save();      
        }
        

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
    public function address(Request $request)
    {
        return $request;
    }
}
