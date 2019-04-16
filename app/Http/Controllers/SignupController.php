<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Manager;
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


/****************** MANAGER  ******************/
public function manager(){
    return view('signup.manager');
    }

    public function managerSignup(Request $req){  
        $manager = new Manager();
        $manager->username = $req->username;
        $manager->m_name = $req->name;
        $manager->m_email = $req->email;
        $manager->m_address = $req->address;
        $manager->m_mobile = $req->mobile;
        $manager->save();

        $user = new user_credential();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->user_type = "MANAGER";
        $user->save();

        return view('login.index');
    }

};
