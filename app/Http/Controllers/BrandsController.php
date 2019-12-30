<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    public function FilterBrand(Request $request)
    {
        // $brand=Category::all()->where('name', $request->category)->first();
        // $product=Product::all()->where('category_id',[$brand->id])->groupBy("brand_id");

        // return DB::table('products')
        // ->join("categories", "categories.id",'=',"products.category_id")
        // ->where("categories.name",$request->category)
        // ->groupBy("products.brand_id")
        // ->get();
    }
}
