<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailySell;
use App\Product;
use App\Shipment;
use App\Transferredintobd;
use App\Customer;
use App\POS;


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
    public function POS(){
        $product = Product::all();
        $customer = Customer::all();
        return view('seller.accounts.POS')->with("product", $product)
                                            ->with("customer", $customer);                               
    }
    public function POSToDB(Request $req){
        $pos = new POS;
        $pos->sells_point_name = $req->sp;
        $pos->p_id = $req->pname;
        $pos->quantity = $req->quantity;
        $pos->rate = $req->rate;
        $pos->c_id = $req->cname;
        $pos->total_amount = $req->amount;
        $pos->save();  
        return view('seller.index');                                
    }

    public function moneyTransfer(){
    	return view('seller.accounts.moneyTransfer');                                
    }
    public function moneyTransferToDB(Request $req){
    	$tr = new Transferredintobd;
        $tr->receiver_name = $req->rname;
        $tr->amount = $req->amount;
        $tr->date = $req->date;
        $tr->save();  
        return view('seller.index');                                
    }

    public function addCustomer(){
    	return view('seller.accounts.addCustomer');                                
    }
    public function addCustomerToDB(Request $req){
        $cr = new Customer();
        $cr->c_name = $req->name;
        $cr->c_email = $req->email;
        $cr->c_address = $req->address;
        $cr->c_mobile = $req->mobile;
        $cr->credit_no = $req->creditno;
        $cr->save();  
        return view('seller.index');                              
    }

// *****************************Inventory********************************
public function shipmentList(){

    return view('seller.inventory.shipmentList');                                
}

public function addProduct(){

    return view('seller.inventory.addProduct');                                
}
public function productToDb(Request $req){

        $pd = new Product();
        $pd->product_name = $req->pname;
        $pd->quantity = $req->quantity;
        $pd->remaining = $req->quantity;
        $pd->save();  
        return view('seller.index');
                                    
}

public function productDetails(){
    $detail = Product::all();
    return view('seller.inventory.productDetails')->with("detail", $detail);                                
}

public function shipmentReport(){
    $report = Shipment::all();
    return view('seller.inventory.shipmentReport')->with("report", $report);                                
}

    





















}
