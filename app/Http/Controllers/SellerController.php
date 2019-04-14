<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerController extends Controller
{
    public function index(Request $req){

    	return view('seller.index');
                                         
    }
}
