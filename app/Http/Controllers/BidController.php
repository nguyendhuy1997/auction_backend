<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Bidder;
use App\Product;
use Illuminate\Support\Carbon;
use App\Services\PayUService\Exception;
use App\Events\BidEvent;
use App\Events\BuyNowEvent;
use App\Events\DemoPusherEvent;
use App\Users;
class BidController extends Controller
{
    public function postBid(Request $request){
        try {
            $mytime = Carbon::now();
            $bidder = new Bidder();
            $bidder->id_seller=$request->id_seller;
            $bidder->id_product=$request->id_product;
            $bidder->price_bid=$request->priceBid;
            $bidder->id_bidder=$request->id_bidder;
            $bidder->date_bid=$mytime;
            $bidder->save();
            ////////////////////
            Product::where('id_product',$request->id_product)->update(array(
                'current_price'=>$request->priceBid
            ));
            event(new BidEvent($request->priceBid,$request->id_bidder,$request->id_product));
          }
          catch (\Exception $e) {
            return 'false';
          }  
       
        return 'aaaa';
    }
    public function postBuyNow(Request $request)
    {
        try {
            // $mytime = Carbon::now();
            // $bidder = new Bidder();
            // $bidder->id_seller=$request->id_seller;
            // $bidder->id_product=$request->id_product;
            // $bidder->price_bid=$request->priceBid;
            // $bidder->id_bidder=$request->id_bidder;
            // $bidder->date_bid=$mytime;
            // $bidder->save();
            // ////////////////////
            // Product::where('id_product',$request->id_product)->update(array(
            //     'current_price'=>$request->priceBid,
            //     'status'=>0,
            //     'id_bidder'=>$request->id_bidder,
            // ));
            event(new BuyNowEvent(0,$request->id_product,$request->id_bidder));

            $seller= Users::where('id',$request->id_seller)->first();
            $data=['name'=>$seller->name,'email'=>$seller->email];
            Mail::send('sendMailSeller',$data,function($message) use($seller){
                $message->from('nguyendhuy1997@gmail.com','Auction Admin');
                $message->to($seller->email,$seller->name)->subject("Auction Anoucement");
            });
            $bidders= Users::where('id',$request->id_bidder)->first();
            $data=['name'=>$bidders->name,'email'=>$bidders->email];
            Mail::send('sendMailBidder',$data,function($message) use($bidders){
                $message->from('nguyendhuy1997@gmail.com','Auction Admin');
                $message->to($bidders->email,$bidders->name)->subject("Auction Anoucement");
            });
           
          }
          catch (\Exception $e) {
            return 'false';
          } 
    }
    public function countDown(Request $request)
    {
        $product=Product::where('id_product',$request->id_product)->first();
        try {
            if($product->status==1)
            {
                Product::where('id_product',$request->id_product)->update(array(
                    'status'=>0,
                ));
                $seller= Users::where('id',$request->id_seller)->first();
                $data=['name'=>$seller->name,'email'=>$seller->email];
                Mail::send('sendMailSeller',$data,function($message) use($seller){
                    $message->from('nguyendhuy1997@gmail.com','Auction Admin');
                    $message->to($seller->email,$seller->name)->subject("Auction Anoucement");
                });
                $bidders= Users::where('id',$request->id_bidder)->first();
                $data=['name'=>$bidders->name,'email'=>$bidders->email];
                Mail::send('sendMailBidder',$data,function($message) use($bidders){
                    $message->from('nguyendhuy1997@gmail.com','Auction Admin');
                    $message->to($bidders->email,$bidders->name)->subject("Auction Anoucement");
                });
            }
          
            
          }
          catch (\Exception $e) {
            return 'false';
          } 
     
    }
    public function sendMail()
    {
        $product=Product::where('id_product','pd6')->first();
        print_r($product->name);
    }
}
