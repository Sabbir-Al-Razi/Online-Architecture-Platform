<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend>Login Form</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
 -->

<html>
<head>
    
	 <title>Admin Login Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/Design/css/bootstrap.min.css">
  	 <script src="assets/Design/js/bootstrap.min.js"></script>
  	
  </head>
<body>

	<pre>This is a Admin Login page</pre>
	<div class="container">
		
		
		<div class="col-sm-4">
		    <h2> Admin Login </h2><hr>
			<div class="form-group">
				 <form method="post">
				 	<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<label for="uname">Username</label>
					<input type="text" name="uname" class="form-control" required  value="{{ old('uname') }}"/> <br><br>
					
					<label for="password">Password</label>
					<input type="password" name="password"  class="form-control" required value="{{ old('password') }}"/><br/><br>
					
					<input type="submit" name="submit" value="Submit" />
				</form>
				<div>{{session('msg')}}</div>
				</div>
		</div>
		
			
			
		</div>

      
  </body>
</html>
