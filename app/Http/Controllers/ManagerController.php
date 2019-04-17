<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\factory;
use App\RawMaterial;

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
        $factory = Factory::all();
    	return view('manager.rawmaterials')->with("factory", $factory);                                
    }
    public function rawmaterialsToDB(Request $req){
    	$rw = new RawMaterial();
        $rw->f_id = $req->fname;
        $rw->material_name = $req->mname;
        $rw->quantity = $req->quantity;
        $rw->price = $req->price;
        $rw->production_type = $req->type;
        $rw->date = $req->date;
        $rw->save();  
        return view('manager.index');                                
    }

    public function factoryShipment(){
    	return view('manager.factoryShipment');                                
    }

    public function factoryList(){
        $factory = Factory::all();
    	return view('manager.factoryList')->with("factory", $factory);                                
    }
 
}
