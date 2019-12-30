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
       return Brand::all()->where('category_id', $request->category);
    }
}
