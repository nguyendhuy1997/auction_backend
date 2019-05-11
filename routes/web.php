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
Route::get('/producttimeout', [
    'as' => 'producttimeout',
    'uses' => 'ProductController@getProductTimeOut'
]);
Route::get('/producthighest', [
    'as' => 'producthighest',
    'uses' => 'ProductController@getProductHighest'
]);
Route::post('/relativeproduct', [
    'as' => 'relativeproduct',
    'uses' => 'ProductController@getRelativeProduct'
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
Route::post('/loadmore', [
    'as' => 'loadmore',
    'uses' => 'ProductController@loadMore'
]);
Route::post('/autocomplete', [
    'as' => 'autocomplete',
    'uses' => 'ProductController@autoComplete'
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
Route::post('/lastbid', [
    'as' => 'lastbid',
    'uses' => 'AccountController@lastBid',
]);
Route::post('/wishlist', [
    'as' => 'wishlist',
    'uses' => 'AccountController@wishList',
]);
Route::post('/wishstatus', [
    'as' => 'wishstatus',
    'uses' => 'AccountController@wishStatus',
]);
Route::post('/getwishlist', [
    'as' => 'getwishlist',
    'uses' => 'AccountController@getwishlist',
]);
Route::post('/postproduct', [
    'as' => 'postproduct',
    'uses' => 'AccountController@postProduct',
]);
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
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
Route::get('/admin/getbill', [
    'as' => 'admin/getbill',
    'uses' => 'AdminController@getBill',
]);
Route::post('/admin/product/accept', [
    'as' => 'admin/product/accept',
    'uses' => 'AdminController@acceptProduct',
]);
Route::post('/admin/product/decline', [
    'as' => 'admin/product/decline',
    'uses' => 'AdminController@declineProduct',
]);
Route::post('/admin/login', [
    'as' => 'admin/login',
    'uses' => 'AdminController@postLogin',
]);
Route::get('/admin/getuser', [
    'as' => 'admin/getuser',
    'uses' => 'AdminController@getUser',
]);
Route::post('/admin/updateuser', [
    'as' => 'admin/updateuser',
    'uses' => 'AdminController@updateUser',
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