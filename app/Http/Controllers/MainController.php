<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
	public function home(){
		return view('home');
	}

    public function termsPage(){
    	return view('terms');
    }

    public function regis(){
    	return view('regis');
    }

    public function saveRegis(Request $request){
    	dd($request);
    }
}
