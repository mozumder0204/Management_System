<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailySell;


class SellerController extends Controller
{
    public function index(){
    	return view('seller.index');                                
    }

// *****************************Accounts********************************
    public function dailySells(){
    	return view('seller.accounts.dailySells');                                
    }
    public function insertDailySells(Request $req){
        $ds = new DailySell;
        $ds->customer_name = $req->cname;
        $ds->product_name = $req->pname;
        $ds->quantity = $req->quantity;
        $ds->rate = $req->rate;
        $ds->total_amount = $req->amount;
        $ds->amount_paid = $req->paid;
        $ds->amount_left = $req->left;
        $ds->save();  
        return view('seller.index');                                
    }

// *****************************Inventory********************************
    public function addProduct(){

    	return view('seller.inventory.addProduct');                                
    }
    public function productToDb(Request $req){

    	                                
    }













}
