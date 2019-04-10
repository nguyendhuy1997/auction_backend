<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Bidder;
use App\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class AccountController extends Controller
{
    public function history(Request $request)
    {
        $result = [];
        $temp = Bidder::where('id_bidder', $request->id_bidder)->distinct()->pluck('id_product');
        foreach ($temp as $p) {
            $product = Product::where('id_product', $p)->first();
            array_push($result, $product);
        }
        return ($result);
    }
    public function postProduct(Request $request)
    {
        $dayEnd = Carbon::parse($request->dayEnd)->format('Y-m-d\TH:i');
        $dayStart = Carbon::now();
        $product = new Product();
        $product->id_product = (str_replace(' ', '-', $request->name));
        $product->name = $request->name;
        $product->category = $request->category;
        $product->first_price = $request->firstPrice;
        $product->last_price = $request->lastPrice;
        $product->step_price = $request->stepPrice;
        $product->current_price = $request->firstPrice;
        $product->day_start = $dayStart;
        $product->day_end = $dayEnd;
        $product->description = $request->description;
        $product->status = null;
        $product->id_seller=$request->idSeller;
        $product->image = $request->image;
        $product->save();
        
        
        //SAVE FILE IMAGE//
        $file_data = $request->image;
        $file_name = 'product-'.$dayStart.''; //generating unique file name; 
        @list($type, $file_data) = explode(';', $file_data);
        @list(, $file_data) = explode(',', $file_data);
        if ($file_data != "") { // storing image in storage/app/public Folder 
            \Storage::disk('public')->put($file_name, base64_decode($file_data));
        }

        return 'aaaa';
        // $imageType=$request->imageType;
        // $pos = strrpos($imageType, ".");
        // $imageType=substr($imageType, $pos, $pos+3);

    }

}
