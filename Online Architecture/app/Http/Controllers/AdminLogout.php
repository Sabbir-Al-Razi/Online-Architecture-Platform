<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLogout extends Controller
{
    //
    public function index(Request $req){
    	
        $req->session()->flush();

    	return view('index');
    }
}
