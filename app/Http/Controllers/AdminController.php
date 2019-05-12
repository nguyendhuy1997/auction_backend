<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Product;
use App\Users;
use Illuminate\Support\Facades\Auth;
use App\Bill;


class AdminController extends Controller
{
    public function postLogin(Request $request)
    {
   
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
         if(Auth::user()->role=='admin')
         {
            return array('email' => Auth::user()->email, 'id' => Auth::user()->id,'money'=>Auth::user()->money, 'role'=>Auth::user()->role);
         }
         else return 'false';
        }
        else{
            return 'false';
        }
      
    
      
    }
    public function getBill(){
        $bills = Bill::get();
        return $bills;
    }
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
        $product=Product::where('id_product',$request->id_product)->first();
        $seller =Users::where('id',$product->id_seller)->first();
            $data = ['product' => $product,'email' => $seller->email,'name'=>$seller->name];
            Mail::send('sendMailAccept', $data, function ($message) use ($seller) {
                $message->from('nguyendhuy1997@gmail.com', 'Auction Admin');
                $message->to($seller->email, $seller->name)->subject("Auction Anoucement");
            });
    }
    public function declineProduct(Request $request){
        $product=Product::where('id_product',$request->id_product)->delete();
    }
    public function getUser(Request $request){
        $user=Users::get();
        return $user;
    }
    public function updateUser(Request $request){
        try {
            Users::where('id',$request->id)->update(array(
                'money'=>$request->money,
            ));
            return ['msg'=>'This account has been update'];
           
        } catch (\Exception $e) {
            return ['msg'=>'false'];
        }
       
    }
}
