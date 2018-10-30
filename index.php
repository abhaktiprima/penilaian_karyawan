<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
<center>
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2><b>LOGIN</b></h2>
			</div>
			<br>
			<div class="panel-body">
				<div class="alert alert-warning">
					Masukkan Username dan Password dengan benar!
				</div>
				<form action="login.php" method="post" class="form">
			<div class="input-group">
    			<label class="input-group-addon" disable>USERNAME : &nbsp;</label>
			    <input type="text" name="username" id="username" autocomplete="off" class="form-control">
			</div>
			<br>
			<div class="input-group">
			    <label class="input-group-addon">PASSWORD : &nbsp;</label>
			    <input type="password" name="password" id="password" autocomplete="off" class="form-control">
			  </div>
			  </div>
			    <br>
			    <input type="submit" name="go" id="go" value="Log in" class="btn btn-success col-md-12">
			  
			</form>
			</div>
		</div>
	</div>
</center>
</body>
</html>