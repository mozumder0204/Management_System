<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerController extends Controller
{
    public function index(){

    	return view('seller.index');                                
    }

    public function dailySells(){

    	return view('seller.dailySells');                                
    }













}
