<!DOCTYPE html>
<html>
<head>
	<title>Blocked User List</title>


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
	<h1>Blocked User List</h1>
	
	<font size="6px">
		<a href="{{route('adminhome.userlist')}}">BACK</a>| 
		<a href="{{route('adminlogout')}}">LOGOUT</a>
		</font>
	<br>
	<br>


	<table border="2" width="800px" hight="800px" >
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>ADDRESS</th>
			<th>DOB</th>
			<th>ACTION</th>

		</tr>
		@foreach($blockeduserlist as $user)
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
				<li><a href="{{route('adminhome.unblockuser', $user['id'])}}">Unblock</a></li>
				</ul>
			</div> 
			</td>
		</tr>
		
		@endforeach
	</table>


	
</body>
</html>