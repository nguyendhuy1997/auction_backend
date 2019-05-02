<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Bidder;
use App\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Wishlist;




class AccountController extends Controller
{
    public function history(Request $request)
    {
        $result = [];
        $temp = Bidder::where('id_bidder', $request->id_bidder)->distinct()->pluck('id_product');
        foreach ($temp as $p) {
            $product = Product::where('id_product',$p)->first();
            array_push($result, $product);
        }
        return ($result);

    }
    public function lastBid(Request $request){
        $result = Bidder::where('id_bidder',$request->id_bidder)->where('id_product',$request->id_product)->orderBy('id','desc')->first();
        return $result;
    }
    public function wishList(Request $request){
        $product=Wishlist::where('id_user',$request->id_user)->where('id_product',$request->id_product)->first();
        if($product==null)
        {
            $wishlist = new Wishlist();
            $wishlist->id_user=$request->id_user;
            $wishlist->id_product=$request->id_product;
            $wishlist->status=1;
            $wishlist->save();
        }
        else{
            Wishlist::where('id_user',$request->id_user)->where('id_product',$request->id_product)->update(array(
                'status'=>$request->status,
            ));
        }
        return $product;
    }
    public function wishStatus(Request $request){
        $product= Wishlist::where('id_user',$request->id_user)->where('id_product',$request->id_product)->first();
        return $product;
    }
    public function getWishlist(Request $request){
        $result=[];
        $wishlist= Wishlist::where('id_user',$request->id_user)->where('status',1)->get();
        foreach($wishlist as $p)
        {
            $product = Product::where('id_product',$p->id_product)->first();
            array_push($result, $product);
        }
        return $result;
    }
    public function postProduct(Request $request)
    {
        try{
            $dayStart = Carbon::now();
            $product = new Product();
            $product->name = $request->name;
            $product->category = $request->category;
            $product->first_price = $request->firstPrice;
            $product->last_price = $request->lastPrice;
            $product->step_price = $request->stepPrice;
            $product->current_price = $request->firstPrice;
            $product->day_start = $dayStart;
            $product->day_end = Carbon::createFromFormat('Y-m-d\TH:i', $request->dayEnd);
            $product->description = $request->description;
            $product->status = null;
            $product->id_seller = $request->idSeller;
        
                    //SAVE FILE IMAGE//
            $file_data = $request->image;
            $file_name = 'product-' .(str_replace(':', '-', $dayStart->toTimeString())). '.png'; //generating unique file name; 
            @list($type, $file_data) = explode(';', $file_data);
            @list(, $file_data) = explode(',', $file_data);
            if ($file_data != "") { // storing image in storage/app/public Folder 
                \Storage::disk('public')->put($file_name, base64_decode($file_data));
            }
            $product->image = $file_name;
            $product->save();
            return (['message'=>"Your Post Has Been Send"]);
        }
        catch (\Exception $e) {
            return ['message'=>"Error"];
          }  
    }

}
