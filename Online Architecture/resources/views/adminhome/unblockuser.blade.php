<!DOCTYPE html>
<html>
<head>
	<title>Unblock User</title>

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

<h1>Unblock User</h1> 

	<font size="4px"><a href="{{route('adminhome.archilist')}}">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >

		<tr>
			<td>Id</td>
			<td>:</td>
			<td>{{$unblockuser['id']}}</td>
		</tr>

		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td>{{$unblockuser['userName']}}</td>
			
		</tr>
		
        <tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$unblockuser['userEmail']}}</td>
		</tr>


		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td>{{$unblockuser['userPhone']}}</td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td>{{$unblockuser['userAddress']}}</td>
		</tr>

		<tr>
			<td>Dob</td>
			<td>:</td>
			<td>{{$unblockuser['userDob']}}</td>
		</tr>

		
	</table>
	<h2>Are you sure? You want to unblock this User</h2>
	<form method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="userId" value="{{$unblockuser['id']}}">
		<input type="submit" name="confirm" value="Unblock">
	</form>


</body>
</html>