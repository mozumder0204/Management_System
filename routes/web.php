<?php
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('login.index');
});

/****************** Login Page ******************/
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('Verification');

/****************** Logout Page ******************/
Route::get('/logout', 'LogoutController@index')->name('logout.index');

/****************** Signup Page ******************/
Route::get('/signup', 'SignupController@index')->name('signup.index');

/****************** Signup Page | SELLER ******************/
Route::get('/signup/seller', 'SignupController@seller')->name('signup.seller');
Route::post('/signup/seller', 'SignupController@sellerSignup');

/****************** Signup Page | ADMIN ******************/
Route::get('/signup/admin', 'SignupController@admin')->name('signup.admin');
Route::post('/signup/admin', 'SignupController@adminSignup');



/****************UNDER SESSION CHECK****************/
Route::group(["middleware"=>['sess']], function(){

/****************** HomePage | SELLER ******************/
Route::get('/home/seller', 'SellerController@index')->name('seller.index');
Route::get('/home/seller/DailySells', 'SellerController@dailySells')->name('seller.dailySells');



// Route::get('/signup/customer', 'SignupController@customer')->name('signup.customer');
// Route::post('/signup/customer', 'SignupController@customerSignup');


/****************** HomePage | ADMIN ******************/
Route::get('/home/admin', 'AdminController@index')->name('admin.index');












});