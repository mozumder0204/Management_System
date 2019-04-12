<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
    	
    }

/****************** CUSTOMER ******************/
public function customer(){
    return view('signup.customer');
    }
/****************** ADMIN  ******************/
public function admin(){
    return view('signup.admin');
    }

};
