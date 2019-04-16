<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\factory;

class ManagerController extends Controller
{
    public function index(){
    	return view('manager.index');                                
    }

    public function addFactory(){
    	return view('manager.addFactory');                                
    }
    public function addFactoryToDB(Request $req){
        $fc = new factory();
        $fc->f_name = $req->name;
        $fc->f_address = $req->address;
        $fc->f_mobile = $req->mobile;
        $fc->STATUS = $req->status;
        $fc->save();  
        return view('manager.index');                               
    }

    public function rawmaterials(){
    	return view('manager.rawmaterials');                                
    }

    public function factoryShipment(){
    	return view('manager.factoryShipment');                                
    }

    public function factoryList(){
    	return view('manager.factoryList');                                
    }
}
