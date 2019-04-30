<!DOCTYPE html>
<html>
<head>
	<title>Add New Architect Information</title>

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

<h1>Add New Architect Information</h1> 

	<font size="4px"><a href="{{route('adminhome.index')}}"">Back</a> |
	<a href="{{route('adminlogout')}}">logout</a> </font>
	<br>
	<br>

<form method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table border="0" width="300px" >
		<tr>
			<td width="35%">Name</td>
			<td width="2%">:</td>
			<td><input type="text"  name="archiName"/></td>
			
		</tr>
		<tr>
			<td>User Name</td>
			<td>:</td>
			<td><input type="text"  name="archiUsername"/></td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text"  name="archiEmail" /></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password"  name="archiPassword" /></td>
		</tr>

		<tr>
			<td>Mobile</td>
			<td>:</td>
			<td><input type="text"  name="archiMobile"/></td>
		</tr>


		<tr>
			<td>Address</td>
			<td>:</td>
			<td><input type="text"  name="archiAddress"/></td>
		</tr>

		
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit"  name="update" value="Submit" /></td>
		</tr>
	</table>
</form>

</body>
</html>