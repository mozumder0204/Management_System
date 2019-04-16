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
Route::get('/signup/manager', 'SignupController@manager')->name('signup.manager');
Route::post('/signup/manager', 'SignupController@managerSignup');



/****************UNDER SESSION CHECK****************/
Route::group(["middleware"=>['sess']], function(){

/****************** HomePage | SELLER ******************/
Route::get('/home/seller', 'SellerController@index')->name('seller.index');

/****************** HomePage | SELLER | Accounts******************/
Route::get('/home/seller/accounts/DailySells', 'SellerController@dailySells')->name('seller.dailySells');
Route::post('/home/seller/accounts/DailySells', 'SellerController@insertDailySells');
Route::get('/home/seller/accounts/POS', 'SellerController@POS')->name('seller.POS');
Route::post('/home/seller/accounts/POS', 'SellerController@POSToDB');
Route::get('/home/seller/accounts/moneyTransfer', 'SellerController@moneyTransfer')->name('seller.moneyTransfer');
Route::post('/home/seller/accounts/moneyTransfer', 'SellerController@moneyTransferToDB');
Route::get('/home/seller/accounts/addCustomer', 'SellerController@addCustomer')->name('seller.addCustomer');
Route::post('/home/seller/accounts/addCustomer', 'SellerController@addCustomerToDB');

/****************** HomePage | SELLER | Inventory******************/
Route::get('/home/seller/inventory/shipmentList','SellerController@shipmentList')->name('seller.shipmentList');
Route::get('/home/seller/inventory/addProduct', 'SellerController@addProduct')->name('seller.addProduct');
Route::get('/home/seller/inventory/productDetails', 'SellerController@productDetails')->name('seller.productDetails');
Route::get('/home/seller/inventory/shipmentReport', 'SellerController@shipmentReport')->name('seller.shipmentReport');
Route::get('/home/seller/inventory/addProduct', 'SellerController@addProduct')->name('seller.addProduct');
Route::post('/home/seller/inventory/addProduct', 'SellerController@productToDb');




/****************** HomePage | ADMIN ******************/
Route::get('/home/manager', 'ManagerController@index')->name('manager.index');

Route::get('/home/manager/addFactory', 'ManagerController@addFactory')->name('manager.addFactory');
Route::post('/home/manager/addFactory', 'ManagerController@addFactoryToDB');

Route::get('/home/manager/rawmaterials', 'ManagerController@rawmaterials')->name('manager.rawmaterials');

Route::get('/home/manager/factoryShipment', 'ManagerController@factoryShipment')->name('manager.factoryShipment');

Route::get('/home/manager/factoryList', 'ManagerController@factoryList')->name('manager.factoryList');












});