<!DOCTYPE html>
<html>
<head>
	<title>Blocked Architecture List</title>


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
	<h1>Blocked Architecture List</h1>
	
	<font size="6px">
		<a href="{{route('adminhome.archilist')}}">BACK</a>| 
		<a href="{{route('adminlogout')}}">LOGOUT</a>
		</font>
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
		@foreach($blockedarchilist as $archi)
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
				<li><a href="{{route('adminhome.unblockarchi', $archi['Id'])}}">Unblock</a></li>
				</ul>
			</div> 
			</td>
		</tr>
		
		@endforeach
	</table>


	
</body>
</html>