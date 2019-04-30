<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="abc/style.css"> -->
</head>
<body>

<h1>Welcome To Admin Panel, {{session('name')}}</h1> 

	<h2><!-- <a href="/home/profile">Profile</a>  | -->
	<a href="{{route('adminhome.adduser')}}">Add User</a> |
	<a href="{{route('adminhome.userlist')}}">User List</a> |
	<a href="{{route('adminhome.archilist')}}">Architecture List</a> |
	<a href="{{route('adminhome.addarchi')}}">Add Architect</a> |
	<a href="{{route('adminhome.newadmin')}}">Assign New Admin</a> |
	<a href="{{route('adminhome.statistical')}}">Statistical Report</a> |
	<a href="{{route('adminlogout')}}">logout</a>  </h2>

</body>
</html>