<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Http\Requests\AddArchi;*/
use App\Archi;
/*use Validator;*/

class AdminArchi extends Controller
{
    //
    public function index(){

    	$archi = Archi::all()
    	->where('status','=','1');

    	return view('adminhome.archilist')->with('archilist',$archi);
    }

    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = Archi::where('Name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <tr>
       <td>'.$row->Id.'</td>
       <td>'.$row->Name.'</td>
       <td>'.$row->Email.'</td>
       <td>'.$row->Address.'</td>
       
       </tr>
       ';
      }
      $output .= '</ul>';
      echo '<table><tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>ADDRESS</th>
                 
                  </tr></table';
      echo $output;
     }
    }

    public function edit($archiId){
    	$archi = Archi::find($archiId);
    	return view('adminhome.archiedit')->with('archiedit', $archi);
    }

    public function update(Request $req, $archiId){
        
       /*$validator = Validator::make($req->all(), [
            'Name' => 'required|unique:archis',
            'UserName' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Mobile' => 'required',
            'Address' => 'required'
        ])->validate();    

     

        if($validator->fails()){
            return redirect()->route('adminhome.archiedit')  
                ->with('errors', $validator->errors())
                ->withInput();
        }
        else{
*/


    	$archi 			    = Archi::find($archiId);
    	$archi->Name 	    = $req->archiName;
    	$archi->Username 	= $req->archiUsername;
    	$archi->Email 	    = $req->archiEmail;
    	$archi->Password 	= $req->archiPassword;
    	$archi->Mobile 	    = $req->archiMobile;
    	$archi->Address 	= $req->archiAddress;

    	$archi->save();
    	return redirect()->route('adminhome.archilist', $archiId);
    }


    public function delete($archiId){
    	$archi = Archi::find($archiId);
    	return view('adminhome.archidelete')->with('archidelete', $archi);
    }

    public function destroy($archiId){
    	$archi = Archi::destroy($archiId);
    	return redirect()->route('adminhome.archilist');
    }

    public function block($archiId){
    	$archi = Archi::find($archiId);
    	return view('adminhome.blockarchi')->with('blockarchi', $archi);
    }

    public function updateblock(Request $req,$archiId){

    	$archi = Archi::find($archiId)
    	->where('Id' ,'=', $req->archiId)
    	->update(['status'=>'0']);

    	/*$archi->save();*/
    	return redirect()->route('adminhome.archilist')->with('blockarchi', $archi);
    }

    public function blockedarchi(){

    	$archi =Archi::all()
        ->where('status','=' , '0');
    	return view('adminhome.blockedarchilist')->with('blockedarchilist',$archi);
        
    
    }

    public function unblock($archiId){
    	$archi = Archi::find($archiId);
    	return view('adminhome.unblockarchi')->with('unblockarchi', $archi);
    }
   
 public function updateunblock(Request $req,$archiId){

    	$archi = Archi::find($archiId)
    	->where('Id' ,'=', $req->archiId)
    	->update(['status'=>'1']);

    	/*$archi->save();*/
    	return redirect()->route('adminhome.archilist')->with('unblockarchi', $archi);
    }
    
    public function addarchi(){

    	return view('adminhome.addarchi');
    }

    public function storearchi(Request $req){

        /*$validator = Validator::make($req->all(), [
            'Name' => 'required',
            'UserName' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'Mobile' => 'required',
            'Address' => 'required'
        ])->validate();    
*/
     

       
        

    	$archi 			    = new Archi;
    	$archi->Name 	    = $req->archiName;
    	$archi->Username 	= $req->archiUsername;
    	$archi->Email 	    = $req->archiEmail;
    	$archi->Password 	= $req->archiPassword;
    	$archi->Mobile 	    = $req->archiMobile;
    	$archi->Address 	= $req->archiAddress;

    	$archi->save();
    	return redirect()->route('adminhome.archilist');

        /* if($validator->fails()){

            return redirect()->route('adminhome.addarchi')  
                ->with('errors', $validator->errors())
                ->withInput();
            
        }*/
    
}
    
}
