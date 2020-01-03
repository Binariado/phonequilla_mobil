<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use App\User_detail;
use App\AddressMain;
use Auth;
use App\Departments;
use App\Cities;
use App\Countries;
use App\ProductFavorite;
use App\Document_Type;
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
            'Document_Type'=>Document_Type::all(),
            'Countries'=>Countries::all(),
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
//return $request;
// ,User_details $userDetail, AddressMain $addressMain
        $user=collect([
            "name"=>$request->name,
            "email"=>$request->email
        ]);
        $newUser= $profile::where('id',Auth::user()->id)->first();
        if($newUser->update($user->all())){
            $userDetail = User_detail::where('user_id',Auth::user()->id);
            if($userDetail->count()>=1){
                if($userDetail->update([
                    "name"=>$request->name,
                    "last_name"=>$request->last_name,
                    "document_types_id"=>$request->document_types_id,
                    "document"=>$request->document,
                    //"birthday"=>$request->birthday,
                    "gender"=>$request->gender,
                    "birthplace"=>$request->birthplace,
                    "phone"=>$request->phone,
                    "current_place"=>$request->current_place,
                ])){
                    $addressMain = AddressMain::where('user_id',Auth::user()->id);
                    if($addressMain->update([
                        "city_id"=>$request->city,
                        "department_id"=>$request->department,
                        "neighborhood"=>$request->neighborhood_m,
                        "address"=>$request->address,
                        "address_detail"=>$request->detailsAddress,
                        "address_site"=>$request->place,
                    ])){
                        return 1;
                    }
                    
                }
            }else{
                $userDetail = new User_detail();
                $userDetail->user_id=Auth::user()->id;
                $userDetail->name=$request->name;
                $userDetail->last_name=$request->last_name;
                $userDetail->document_types_id=$request->document_types_id;
                $userDetail->document=$request->document;
                $userDetail->gender="Hombre";
                //$userDetail->birthday=$request->birthday;
                $userDetail->birthplace=$request->birthplace;
                $userDetail->phone=$request->phone;
                $userDetail->current_place=$request->current_place;
                if($userDetail->save()){
                    $addressMain=new AddressMain();
                    $addressMain->user_id=Auth::user()->id;
                    $addressMain->city_id=$request->city;
                    $addressMain->department_id=$request->department;
                    $addressMain->neighborhood=$request->neighborhood_m;
                    $addressMain->address=$request->address;
                    $addressMain->address_detail=$request->detailsAddress;
                    $addressMain->address_site=$request->place;
                    $addressMain->state=1;
                    if($addressMain->save()){
                        return 1;
                    }
                }
            }
        }
        // `document_types_id``name``username``birthday``birthplace``gender``phone``landline``document``current_place`
    }
    public function createUserDetail($data)
    {
        # code...
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
