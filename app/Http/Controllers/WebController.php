<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
   	 $gudang = Gudang::all();
    	 return view('gudang',['gudang' => $gudang]);
   }
}
