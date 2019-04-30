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
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}


</style>
</head>
<body>
	<h1>Architecture List</h1>

	<div class="container box">
   <h3 >Search</h3>
   
   <div class="form-group">
    <input type="text" name="userName" id="userName" class="form-control input-lg" placeholder="Enter Architect Name" />
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
          url:"{{ route('adminhome.archilist.fetch') }}",
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
	
	<font size="6px"><a href="{{route('adminhome.index')}}"">BACK</a> 
		|<a href="{{route('adminlogout')}}">LOGOUT</a>|
		<a href="{{route('adminhome.blockedarchilist')}}">BLOCKED ARCHITECT</a></font>
	<br>
	<br>


	<table border="2" width="800px" hight="800px" >
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>ADDRESS</th>
			<th>ACTION</th>

		</tr>
		@foreach($archilist as $archi)
		<tr>
			<td>{{$archi['Id']}}</td>
			<td>{{$archi['Name']}}</td>
			<td>{{$archi['Username']}}</td>
			<td>{{$archi['Email']}}</td>
			<td>{{$archi['Mobile']}}</td>
			<td>{{$archi['Address']}}</td>
		
		    <td>

				<div id="menu">
                <ul>
				<li><a href="{{route('adminhome.archiedit', $archi['Id'])}}">Edit</a></li>
				<li><a href="{{route('adminhome.archidelete', $archi['Id'])}}">Delete</a>
				</li><li><a href="{{route('adminhome.blockarchi', $archi['Id'])}}">Block</a></li></ul></div> 
			</td>
		</tr>
		
		@endforeach
	</table>


	
</body>
</html>