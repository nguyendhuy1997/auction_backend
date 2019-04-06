@extends('layout.layout') 
@section('content')
<div class="account_grid">
    <div class=" login-right">
       <h3>REGISTERED CUSTOMERS</h3>
     <p>If you have an account with us, please log in.</p>
     <form action="login" method="POST">
         @csrf
         <input type="hidden" name ="_token" value="{{csrf_token()}}"/>
       <div>
         <span  id="txtEmail">Email Address<label>*</label></span>
         <input type="email" name='txtEmail' required> 
       </div>
       <div>
         <span name='txtPassword' id="txtPassword">Password<label>*</label></span>
         <input type='password' name='txtPassword' required> 
       </div>
       <a class="forgot" href="#">Forgot Your Password?</a>
       <input type="submit" value="Login">
     </form>
    </div>	
     <div class=" login-left">
        <h3>NEW CUSTOMERS</h3>
      <p>By creating an account with our website, you will be able to auction anything you want</p>
     <a class="acount-btn" href="{{route('register')}}">Create an Account</a>
    </div>
    <div class="clearfix"> </div>
  </div>
  @endsection