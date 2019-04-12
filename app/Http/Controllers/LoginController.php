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
        $username = $req->username;
        $password = $req->password;
        $validate = user_credential::where('username' , $username)
                                   ->where ('password', $password)
                                   ->first();
                                        
                                         

        if($validate->user_type == "SELLER"){
            return redirect()->route('seller.index');
        }
        else{
            return view('login.index');
        }
        

    }
}
