<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usertable;

class AdminUser extends Controller
{
    //
    public function index(){

    	$user = Usertable::all()
    	->where('status','=','1');

    	return view('adminhome.userlist')->with('userlist',$user);
    }

    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = Usertable::where('userName', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <tr>
       <td>'.$row->id.'</td>
       <td>'.$row->userName.'</td>
       <td>'.$row->userEmail.'</td>
       <td>'.$row->userAddress.'</td>
       
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

    public function edit($userId){
    	$user = Usertable::find($userId);
    	return view('adminhome.useredit')->with('useredit', $user);
    }

    public function update(Request $req, $userId){

    	$user 			    = Usertable::find($userId);
    	$user->userName 	    = $req->userName;
    	$user->userEmail 	    = $req->userEmail;
    	$user->password 	= $req->userPassword;
    	$user->userPhone 	    = $req->userMobile;
    	$user->userAddress 	= $req->userAddress;
    	$user->userDob 	= $req->userDob;

    	$user->save();
    	return redirect()->route('adminhome.userlist', $userId);
    }

    public function delete($userId){
    	$user = Usertable::find($userId);
    	return view('adminhome.userdelete')->with('userdelete', $user);
    }

    public function destroy($userId){
    	$user = Usertable::destroy($userId);
    	return redirect()->route('adminhome.userlist');
    }

    public function block($userId){
      $user = Usertable::find($userId);
      return view('adminhome.blockuser')->with('blockuser', $user);
    }
    
    public function updateblock(Request $req,$userId){

      $user = Usertable::find($userId)
      ->where('id' ,'=', $req->userId)
      ->update(['status'=>'0']);

      /*$archi->save();*/
      return redirect()->route('adminhome.userlist')->with('blockuser', $user);
    }

    public function blockeduser(){

      $user =Usertable::all()
        ->where('status','=' , '0');
      return view('adminhome.blockeduserlist')->with('blockeduserlist',$user);
        
    }

    public function unblock($userId){
      $user = Usertable::find($userId);
      return view('adminhome.unblockuser')->with('unblockuser', $user);
    }

    public function updateunblock(Request $req,$userId){

      $user = Usertable::find($userId)
      ->where('Id' ,'=', $req->userId)
      ->update(['status'=>'1']);

      /*$archi->save();*/
      return redirect()->route('adminhome.userlist')->with('unblockuser', $user);
    }

    public function adduser(){

      return view('adminhome.adduser');
    }

    public function storeuser(Request $req){

      $user             = new Usertable;
      $user->userName   = $req->userName;
      $user->password   = $req->userPassword;
      $user->userEmail  = $req->userEmail;
      $user->userPhone  = $req->userMobile;
      $user->userAddress= $req->userAddress;
      $user->userDob    = $req->userDob;

      $user->save();
      return redirect()->route('adminhome.userlist');
    }
}
