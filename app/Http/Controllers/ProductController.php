<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Bidder;

class ProductController extends Controller
{
    public function getProduct()
    {
        $product = Product::where('status', 1)
                            ->orderBy('day_end', 'desc')
                            ->limit(6)
                            ->get();
        // return view('home', compact('product'));
        return json_encode($product);

    }
    public function getCategory()
    {
        $cate= Category::get();
        return $cate;
    }
    public function getProductCategory(Request $request){
        $product = Product::where('category', $request->id)->get();
        return json_encode($product);
    }
    public function getSingle(Request $request)
    {
        $product = Product::Where('id_product',$request->id)->first();
        // return view('single',compact('product'));
        return $product;
    }


}
