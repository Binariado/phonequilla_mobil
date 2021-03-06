<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Info;
use Auth;
use Illuminate\Http\Request;
use App\ProductFavorite;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $category = Category::all();

        return view('home',[
        'product'=>$products,
        'category'=>$category,
        "info"=>Info::all()->first(),
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
        $products=Product::where('id',$id)->first();
        $product_=Product::all()->forPage(1,3);
        return view('product.view-prod', [
            'product'=>$products,
            "product_"=>$proProductduct_
        ]);
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
    public function search($search){
        $products=Product::where('name','LIKE','%'.$search.'%')->get();

  return view('search',[
    'producto'=> $products
  ]);
  }


  public function addfavorite($id){

       $products=Product::where('id',$id)->first();
       $products->favorite=$products->favorite+1;
       $products->save();
       $favorite=new ProductFavorite();
       $favorite->user_id=Auth::user();
       $favorite->product_id=$id;
       $favorite->save();
  }

  public function favorite(){
    $favorite=ProductFavorite::all();
    
  }
}
