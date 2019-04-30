<html>
<head>
    
	 <title></title>
  	
  </head>
<body>

	<pre>This is a New Admin Panel</pre>
	<div class="container">
		
		
		<div class="col-sm-4">
		    <h2> New admin Sign up </h2><hr>
			<div class="form-group">
				 <form method="post">
				 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="uname">Username</label>
					<input type="text" name="uname" class="form-control" required /> <br/>
					
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" required /><br/>
					
					<input type="submit" name="submit" value="Submit" />
				</form>
				</div>
		</div>
		
			
			
		</div>

      
  </body>
</html>
