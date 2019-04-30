<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminLogin extends Controller
{
    //
    public function index(){
    	return view('login.adminlogin');
    }
    public function verify(Request $req){
    
        $admin=Admin::where('name', $req->uname)
            ->where('password', $req->password)
            ->first();

    	if($admin){
            $req->session()->put('name', $req->uname);
    		return redirect()->route('adminhome.index');
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect('/adminlogin');
            //return view('login.index');
    	}
    }
}
