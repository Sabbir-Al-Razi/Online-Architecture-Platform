<!DOCTYPE html>
<html>
<head>
	<title>Unblock Architectect</title>

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

<h1>Unblock Architect</h1> 

	<font size="4px"><a href="{{route('adminhome.archilist')}}">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >

		<tr>
			<td>Id</td>
			<td>:</td>
			<td>{{$unblockarchi['Id']}}</td>
		</tr>

		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td>{{$unblockarchi['Name']}}</td>
			
		</tr>
		<tr>
			<td>User Name</td>
			<td>:</td>
			<td>{{$unblockarchi['Username']}}</td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$unblockarchi['Email']}}</td>
		</tr>

		<!-- <tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password"  name="archiPassword" value="{{$unblockarchi['Password']}}" /></td>
		</tr> -->

		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td>{{$unblockarchi['Mobile']}}</td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td>{{$unblockarchi['Address']}}</td>
		</tr>

		
	</table>
	<h2>Are you sure? You want to unblock this Architect</h2>
	<form method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="archiId" value="{{$unblockarchi['Id']}}">
		<input type="submit" name="confirm" value="Unblock">
	</form>


</body>
</html>