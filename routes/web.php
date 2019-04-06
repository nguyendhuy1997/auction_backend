<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//<--Product API-->>//
Route::get('/product', [
    'as' => 'homepage',
    'uses' => 'ProductController@getProduct'
]);
Route::get('/product/{id}', [
    'as' => 'single',
    'uses' => 'ProductController@getSingle'
]);
Route::get('/category', [
    'as' => 'category',
    'uses' => 'ProductController@getCategory'
]);
Route::get('/productcategory/{id}', [
    'as' => 'productcategory',
    'uses' => 'ProductController@getProductCategory'
]);

//<--Product API-->>//


//<--Bid API-->>//
Route::post('/bid', [
    'as' => 'bid',
    'uses' => 'BidController@postBid'
]);
Route::post('/buynow', [
    'as' => 'buynow',
    'uses' => 'BidController@postBuyNow'
]);
Route::post('/countdown', [
    'as' => 'countdown',
    'uses' => 'BidController@countDown'
]);
Route::get('/sendmail', [
    'as' => 'sendmail',
    'uses' => 'BidController@sendMail'
]);
//<--Bid API-->>//


//<--Authentication User-->>//
Route::post('/register', [
    'as' => 'register',
    'uses' => 'RegisterController@postRegister'
]);
Route::post('/checkemail', [
    'as' => 'checkemail',
    'uses' => 'RegisterController@checkEmail'
]);
Route::post('/login', [
    'as' => 'login',
    'uses' => 'LoginController@postLogin',

]);
Route::post('/history', [
    'as' => 'history',
    'uses' => 'AccountController@history',
]);
Route::post('/postproduct', [
    'as' => 'postproduct',
    'uses' => 'AccountController@postProduct',
]);
Route::get('/getemail/{id}', [
    'as' => 'getemail',
    'uses' => 'LoginController@getEmail'
]);
//<--Authentication User-->>//

//<--ADMIN -->>//
Route::get('/admin/getproduct', [
    'as' => 'admin/getproduct',
    'uses' => 'AdminController@getProduct',
]);
Route::post('/admin/product/accept', [
    'as' => 'admin/product/accept',
    'uses' => 'AdminController@acceptProduct',
]);
Route::post('/admin/product/decline', [
    'as' => 'admin/product/decline',
    'uses' => 'AdminController@declineProduct',
]);

// Route::get('/admin/getuser', [
//     'as' => 'admin/getuser',
//     'uses' => 'AdminController@getUser',
// ]);
// Route::post('/admin/user/accept', [
//     'as' => 'admin/product/accept',
//     'uses' => 'AdminController@acceptProduct',
// ]);
// Route::post('/admin/product/decline', [
//     'as' => 'admin/product/decline',
//     'uses' => 'AdminController@declineProduct',
// ]);
//<--ADMIN -->>//





Route::get('/logout',[
	'as'=>'logout',
	'uses'=>'LoginController@logOut'
]);

Route::get('demo-pusher','FrontEndController@getPusher');
// Truyển message lên server Pusher
 Route::get('fire-event','FrontEndController@fireEvent');