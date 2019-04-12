<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Admin;
use App\Customer;
use App\user_credential;
class SignupController extends Controller
{
/****************** Index ******************/    
    public function index(){
    	return view('signup.index');
    }
/****************** SELLER ******************/
    public function seller(){
    	return view('signup.seller');
    }

    public function sellerSignup(Request $req){  
        $seller = new Seller;
        $seller->username = $req->username;
        $seller->s_name = $req->name;
        $seller->s_email = $req->email;
        $seller->s_address = $req->address;
        $seller->s_mobile = $req->mobile;
        $seller->save();

        $user = new user_credential();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->user_type = "SELLER";
        $user->save();

        return view('login.index');
    }

/****************** CUSTOMER ******************/
public function customer(){
    return view('signup.customer');
    }

    public function customerSignup(Request $req){  
        $customer = new Customer;
        $customer->username = $req->username;
        $customer->c_name = $req->name;
        $customer->c_email = $req->email;
        $customer->c_address = $req->address;
        $customer->c_mobile = $req->mobile;
        $customer->save();

        $user = new user_credential();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->user_type = "CUSTOMER";
        $user->save();

        return view('login.index');
    }
/****************** ADMIN  ******************/
public function admin(){
    return view('signup.admin');
    }

    public function adminSignup(Request $req){  
        $admin = new Admin();
        $admin->username = $req->username;
        $admin->a_name = $req->name;
        $admin->a_email = $req->email;
        $admin->a_address = $req->address;
        $admin->a_mobile = $req->mobile;
        $admin->save();

        $user = new user_credential();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->user_type = "ADMIN";
        $user->save();

        return view('login.index');
    }

};
