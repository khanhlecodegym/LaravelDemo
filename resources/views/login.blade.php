<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </style>  
    <body>
        <form method="post">
        	<p>@csrf</p>
          	<div class="form-group">
            	<label for="usr">Name:</label>
             	<input type="text" class="form-control" id="usr" name="username">
             
          	</div>
		  	<div class="form-group">
				<label for="pwd">Password:</label>
			 	<input type="password" class="form-control" id="pwd" name="password">
		  	</div>
		  	<div class="form-group">
		  		<input type="submit" value="Sign in"/>
		  	</div>
       </form>
    </body>
</html>