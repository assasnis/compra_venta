<?php

namespace compra_venta\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use compra_venta\Http\Requests;
use compra_venta\Http\Controllers\Controller;

class Main extends Controller
{
    public function index(){

    	if (Auth::check()) {    
    		return redirect('index');
		}
		else{
			return view('home');
		}

    	
    }

    public function store(){
    	echo "holi";
    }
}
