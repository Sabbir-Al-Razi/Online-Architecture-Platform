<!DOCTYPE html>
<html>
<head>
	<title>Delete User Information</title>

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

<h1>Delete User Information</h1> 

	<font size="4px"><a href="{{route('adminhome.userlist')}}"">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >
		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td>{{$userdelete['userName']}}</td>
			
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$userdelete['userEmail']}}</td>
		</tr>

		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td>{{$userdelete['userPhone']}}</td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td>{{$userdelete['userAddress']}}</td>
		</tr>

		<tr>
			<td>Dob</td>
			<td>:</td>
			<td>{{$userdelete['userDob']}}</td>
		</tr>
         
		
	</table>
	<h2>Are you sure?</h2>
	<form method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="userId" value="{{$userdelete['id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>


</body>
</html>