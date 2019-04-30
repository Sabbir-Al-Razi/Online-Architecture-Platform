<!DOCTYPE html>
<html>
<head>
	<title>User List</title>


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
	<h1>Statistical Report</h1>
	
	<font size="6px"><a href="{{route('adminhome.index')}}"">BACK</a> 
		|<a href="{{route('adminlogout')}}">LOGOUT</a>
		
	<br>
	<br>


	<table border="2" width="800px" hight="800px" >
		<tr>
			
			<th>TYPES OF USER</th>
			<th>TOTAL</th>
			
			

		</tr>
		
		
		<tr>
			<td>USER</td>
			<td>{{$statistic}}</td>
			
	
		</tr>

		<tr>
			
			<td>ARCHITECT</td>
			<td>{{$statistic1}}</td>
			
			
			

		</tr>

		<tr>
			<td>BLOCKED ARCHITECT</td>
			<td>{{$statistic2}}</td>
			
	
		</tr>

		<tr>
			
			<td>BLOCKED USER</td>
			<td>{{$statistic3}}</td>
			
			
			

		</tr>

		
		

	</table>


	
</body>
</html>