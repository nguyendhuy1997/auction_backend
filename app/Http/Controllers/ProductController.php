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
                            ->orderBy('day_start', 'desc')
                            ->limit(6)
                            ->get();
        // return view('home', compact('product'));
        return json_encode($product);
    }
    public function getProductTimeOut(){
        $product = Product::where('status', 1)
                            ->orderBy('day_end', 'ASC')
                            ->limit(6)
                            ->get();
        // return view('home', compact('product'));
        return json_encode($product);
    }
    public function getRelativeProduct(Request $request){
        $product= Product::where('category',$request->id_category)->where('status',1)->where('id_product','!=',$request->id_product)->inRandomOrder()->limit(3)->get();
        return $product;
    }
    public function getProductHighest(){
        $product = Product::where('status', 1)
                           ->orderBy('current_price', 'desc')
                           ->limit(6)
                           ->get();
       return json_encode($product);
   }
    public function getCategory()
    {
        $cate= Category::get();
        return $cate;
    }
    public function getProductCategory(Request $request){
        $product = Product::where('category', $request->id)->where('status',1)->orderby('id_product','DESC')->limit(3)->get();
        return json_encode($product);
    }
    public function getSingle(Request $request)
    {
        $product = Product::Where('id_product',$request->id)->first();
        // return view('single',compact('product'));
        return $product;
    }
    public function loadMore(Request $request)
    {
        $product=Product::where('category',$request->id)->where('status',1)->orderby('id_product','DESC')->limit(3)->offset($request->offSet)->get();
        return $product;
    }
    public function autoComplete(Request $request)
    {
        $product=Product::where('name', 'like', '%' . $request->name . '%')->where('status',1)->get();
        return $product;
        
    }

}
