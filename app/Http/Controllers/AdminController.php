<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class AdminController extends Controller
{
    public function getProduct()
    {
        $product = Product::where('status', NULL)
                            ->get();
        // return view('home', compact('product'));
        return json_encode($product);
    }
    public function acceptProduct(Request $request){
        Product::where('id_product',$request->id_product)->update(array(
            'status'=>1,
        ));
    }
    public function declineProduct(Request $request){
        $product=Product::where('id_product',$request->id_product)->delete();
    }
}
