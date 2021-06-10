<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        return view('main');
    }
    public function getStores($data){

        #dd($data);
       return  Store::where('name', 'like', '%'. $data .'%')->orWhere('state','like', '%'. $data .'%')->orWhere('city','like', '%'. $data .'%')->get();
    }
}
