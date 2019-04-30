<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Usertable;
use App\Archi;


class AdminHome extends Controller
{
    //
    public function index(Request $req){
    	
		return view('adminhome.index');
	}

	public function statistic(){

		$statistic= Usertable::all()->where('status','=', '1');
		$count1=$statistic->count();

		$statistic1= Archi::all()->where('status','=', '1');
		$count2=$statistic1->count();

		$statistic2= Archi::all()->where('status','=', '0');
		$count3=$statistic2->count();

		$statistic3= Usertable::all()->where('status','=', '0');
		$count4=$statistic3->count();

		return view('adminhome.statistical')->with('statistic',$count1)
		->with('statistic1',$count2)
		->with('statistic2',$count3)
		->with('statistic3',$count4);

	}

    public function addnewadmin(){

      return view('adminhome.newadmin');
    }

	public function storenewadmin(Request $req){

		$admin 			    = new Admin;
    	$admin->name 	    = $req->uname;
    	$admin->password 	= $req->password;
    	

    	$admin->save();
    	return redirect()->route('adminhome.index');
	}

}
