<?php

namespace App\Http\Controllers;
use App\Users;
use App\User;
use Hash;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function getRegister(){
        return view('register');
    }
    public function checkEmail(Request $request){
        $email = Users::where('email',$request->email)->value('email');
        if($email==NULL)
        {
            return "true";
        }
        else
        {
           return "false";
        }
    }
    public function postRegister(Request $request)
    {
        $user = new Users();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return $request->email;
    }
}
