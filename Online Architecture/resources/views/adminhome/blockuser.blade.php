<!DOCTYPE html>
<html>
<head>
	<title>Block User</title>

	<style>
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

<h1>Block User</h1> 

	<font size="4px"><a href="{{route('adminhome.userlist')}}"">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >
		<tr>
			<td width="35%">Id</td>
			<td width="2%">:</td>
			<td>{{$blockuser['id']}}</td>
			
		</tr>

		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td>{{$blockuser['userName']}}</td>
			
		</tr>
		

		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$blockuser['Email']}}</td>
		</tr>

		

		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td>{{$blockuser['userPhone']}}</td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td>{{$blockuser['userAddress']}}</td>
		</tr>

		<tr>
			<td>DOB</td>
			<td>:</td>
			<td>{{$blockuser['userDob']}}</td>
		</tr>

		
	</table>
	<b  style="color:red; font-size:20px;">Block this user</b>
	<form method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="hidden" name="userId" value="{{$blockuser['id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>


</body>
</html>