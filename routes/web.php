<?php

Route::get('/', function () {
    return view('login.index');
});

/****************** Login Page ******************/
Route::get('/login', 'LoginController@index')->name('login.index');
// Route::post('/login', 'LoginController@verify');

/****************** Signup Page ******************/
Route::get('/signup', 'SignupController@index')->name('signup.index');

/****************** Signup Page | SELLER ******************/
Route::get('/signup/seller', 'SignupController@seller')->name('signup.seller');
Route::post('/signup/seller', 'SignupController@sellerSignup');

/****************** Signup Page | CUSTOMER ******************/
Route::get('/signup/customer', 'SignupController@customer')->name('signup.customer');
/****************** Signup Page | ADMIN ******************/
Route::get('/signup/admin', 'SignupController@admin')->name('signup.admin');