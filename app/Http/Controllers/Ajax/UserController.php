<?php

namespace App\Http\Controllers;
use App\User;
use Nexmo\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser(){
        if(Auth::check())
        {
            return Auth::user()->id;
        }
        return Response::json([
            'error' => "error"
        ], 201);
    }
   

}
