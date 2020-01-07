<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use App\Product;
use App\Departments;
use App\Cities;
use App\Store;
use App\Countries;
use App\User_address;
use App\AddressMain;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$carrito= Cart::add(455, 'Sample Item', 100.99, 2, array());
      $cartContent = Cart::getContent();
      $product = Product::all();
    return view('cart/index',compact("cartContent","product"));
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
    public function purchaseAddress(Request $request)
    {
        try {
            DB::beginTransaction();
            $departments=Departments::all();
            $cartItems=Product::whereIn('id',Cart::getContent()->keyBy("id")->keys())->get();
            if(collect($request)->count()==1){
                $id=explode("-",$request->address_id);
                if(count($id)==1){
                    $address=User_address::where("id",$request->address_id)->get()->first();
                }else{
                    $address= AddressMain::where("id",$id[0])->get()->first();
                }
                session("cart")["address"]=$address;
                return view('cart/info_purchase',[
                    "departments"=>$departments,
                    "cartItems"=>$cartItems,
                    "address"=>$address
                ]);
            }else{
                $address=new User_address;
                $address->user_id=Auth::user()->id;
                $address->city_id=$request->city;
                $address->department_id=$request->department;
                $address->neighborhood=$request->neighborhood;
                $address->address=$request->address;
                $address->address_detail=$request->detailsAddress;
                $address->address_site=$request->place;
                $address->state=1;
                $address->save();
                DB::commit();
                session("cart")["address"]=$address;
                return view('cart/info_purchase',[
                    "departments"=>$departments,
                    "cartItems"=>$cartItems,
                    "address"=>$address,
                ]);
            }
        } catch (Exception $e) {
            DB::rollBack();
            return 3;
        }

        
    }
    public function purchase()
    {
        $departments=Departments::all();
        $cartItems=Product::whereIn('id',Cart::getContent()->keyBy("id")->keys())->get();
        return view('cart/shipment-details',[
            "departments"=>$departments,
            "cartItems"=>$cartItems
        ]);
    }

    public function shipmentDetails(Request $request)
    {
        if($request->Shipping_type==2){
            session([
                'cart' => collect([
                    "ShippingDetail"=>[
                        "departments"=> $request->departments,
                        "city"=> $request->city,
                        "store"=> $request->store,
                        "Shipping_type"=> $request->Shipping_type
                    ]
                ])
            ]);
        }else{
            session([
                'cart' => collect([
                    "ShippingDetail"=>[
                        "Shipping_type"=> $request->Shipping_type
                    ]
                ])
            ]);
        }
        $address_main = addressMain::where("user_id",Auth::user()->id)->get();
        $user_address = User_address::where("user_id",Auth::user()->id)->get();
        $departments=Departments::all();
        $address=$user_address->merge($address_main);
        $cartItems=Product::whereIn('id',Cart::getContent()->keyBy("id")->keys())->get();
        return view('cart/purchase',[
            "departments"=>$departments,
            "cartItems"=>$cartItems,
            "addresses"=>$address
        ]);
        return session("cart");
    }

    public function add($id,Request $request){
      $product= Product::where('id',$id)->first();
      $price=$product->price;
      if(trim($product->price=="") || $product->price==null){
        $price=$product->discount;
      }
      Cart::add($product->id,$product->name,$price,1, array(
          'color'=>$request->color
      ));
    }
    public function cities()
    {

       return[
           "cities"=>Cities::all()->groupBy("departament_id"),
           "store"=>Store::all()->groupBy("city_id")
       ];
    }

}
