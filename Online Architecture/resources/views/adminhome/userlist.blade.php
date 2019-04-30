<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
     
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>

	<style>

     table {
  	border-collapse: collapse;
  	width: 100%;
		}

		th, td {
		  padding: 8px;
		  text-align: left;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {background-color:#f5f5f5;}

		#menu{
	    width: 70%;
	    height: 100%;
	    //background-color: antiquewhite;
	    float: right;
	    text-align: right;
	}
	#menu>ul{
	    list-style: none;
	    padding-right: 100px;
	    padding-top: 20px;
	}
	#menu>ul>li{
	    display: inline-block;
	    //background-color: aqua;
	    margin-left: 20px;
	}
	#menu>ul>li>a{
	    text-decoration: none;
	    color: black;
	}
  a:hover {
    background-color: #7b7b7b;
    border:1px solid black;
    font-size:25px;
    display:block;
}

		</style>





		
	
</head>

<body>



	<h1>User List</h1>

	<div class="container box">
   <h3 >Search</h3>
   
   <div class="form-group">
    <input type="text" name="userName" id="userName" class="form-control input-lg" placeholder="Enter User Name" />
    <div id="userlist">
    </div>
   </div>
   {{ csrf_field() }}
  </div>

      
	 <script>
$(document).ready(function(){

 $('#userName').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('adminhome.userlist.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#userlist').fadeIn();  
                    $('#userlist').html(data);
          }
         });
        }
    });

    /*$(document).on('click', 'li', function(){  
        $('#userName').val($(this).text());  
        $('#userlist').fadeOut();  
    });  
*/
});
</script>

	<div id="menu">
                <ul>
	<li><a href="{{route('adminhome.index')}}">BACK</a></li>
	<li><a href="{{route('adminlogout')}}">LOGOUT</a></li>
	<li><a href="{{route('adminhome.blockeduserlist')}}">BLOCKED USER</a></li> </ul></div>
	<br>
	<br>



	<table border="1" width="400px" >
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>ADDRESS</th>
			<th>DOB</th>
			<th>ACTION</th>
		</tr>

		@foreach($userlist as $user)
		<tr>
			<td>{{$user['id']}}</td>
			<td>{{$user['userName']}}</td>
			<td>{{$user['userEmail']}}</td>
			<td>{{$user['userPhone']}}</td>
			<td>{{$user['userAddress']}}</td>
			<td>{{$user['userDob']}}</td>
			
		
		    <td>

				<div id="menu">
                <ul>
				<li><a href="{{route('adminhome.useredit', $user['id'])}}">Edit</a></li>
				<li><a href="{{route('adminhome.userdelete', $user['id'])}}">Delete</a>
				</li><li><a href="{{route('adminhome.blockuser', $user['id'])}}">Block</a></li></ul></div> 
			</td>
		</tr>
		
		@endforeach
	</table>
</body>
</html>

