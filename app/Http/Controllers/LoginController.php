<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use App\Users;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return array('email' => Auth::user()->email, 'id' => Auth::user()->id,'money'=>Auth::user()->money, 'role'=>Auth::user()->role);
        } else {
            return 'false';
        }
    }
    public function logOut()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function getEmail(Request $request)
    {
        $user = Users::Where('id',$request->id)->Select('email')->get();
        return $user;
    }
}

