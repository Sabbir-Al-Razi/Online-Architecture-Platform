<!DOCTYPE html>
<html>
<head>
	<title>Edit User Information</title>

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

<h1>Edit User Information</h1> 

	<font size="4px"><a href="{{route('adminhome.userlist')}}"">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>

<form method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >
		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td><input type="text"  name="userName" value="{{$useredit['userName']}}"/></td>
			
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password"  name="userPassword" value="{{$useredit['password']}}" /></td>
		</tr>
		
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text"  name="userEmail" value="{{$useredit['userEmail']}}"/></td>
		</tr>

		

		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td><input type="text"  name="userMobile" value="{{$useredit['userPhone']}}"/></td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td><input type="text"  name="userAddress" value="{{$useredit['userAddress']}}"/></td>
		</tr>

		<tr>
			<td>Dob</td>
			<td>:</td>
			<td><input type="text"  name="userDob" value="{{$useredit['userDob']}}"/></td>
		</tr>


		
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit"  name="update" value="Update" /></td>
		</tr>
	</table>
</form>

</body>
</html>