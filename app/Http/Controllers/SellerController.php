<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerController extends Controller
{
    public function index(Request $req){
        echo($req);

        // $getALL = Seller::all();
        
    	// return view('seller.index')->with('data', $getALL);
                                         
    }
}
