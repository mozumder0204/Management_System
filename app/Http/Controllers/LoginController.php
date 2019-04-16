<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_credential;

class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
        $validate = user_credential::where('username' , $req->username)
                                   ->where ('password', $req->password)
                                   ->first();
                                        
        if($validate->user_type == "SELLER"){
            $req->session()->put('loggedUser', $req->username);
            return redirect()->route('seller.index');
        }
        else if($validate->user_type == "MANAGER"){
            $req->session()->put('loggedUser', $req->username);
            return redirect()->route('manager.index');

        }
        else{
            return view('login.index');
        }

    }
}
