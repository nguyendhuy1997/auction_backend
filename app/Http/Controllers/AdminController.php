<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Users;
use Illuminate\Support\Facades\Auth;


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
