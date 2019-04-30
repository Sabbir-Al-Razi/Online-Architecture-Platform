<!DOCTYPE html>
<html>
<head>
	<title>Block Architect</title>

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

<h1>Block Architect</h1> 

	<font size="4px"><a href="{{route('adminhome.archilist')}}"">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >
		<tr>
			<td width="35%">Id</td>
			<td width="2%">:</td>
			<td>{{$blockarchi['Id']}}</td>
			
		</tr>

		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td>{{$blockarchi['Name']}}</td>
			
		</tr>
		<tr>
			<td>User Name</td>
			<td>:</td>
			<td>{{$blockarchi['Username']}}</td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{$blockarchi['Email']}}</td>
		</tr>

		<!-- <tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password"  name="archiPassword" value="{{$blockarchi['Password']}}" /></td>
		</tr> -->

		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td>{{$blockarchi['Mobile']}}</td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td>{{$blockarchi['Address']}}</td>
		</tr>

		
	</table>
	<b  style="color:red; font-size:20px;">Block this user</b>
	<form method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="hidden" name="archiId" value="{{$blockarchi['Id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>


</body>
</html>