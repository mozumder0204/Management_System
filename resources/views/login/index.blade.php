<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href={{ asset('bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
	<link href={{ asset('bootstrap/css/datepicker3.css') }} rel="stylesheet">
	<link href={{ asset('bootstrap/css/styles.css') }} rel="stylesheet">
	<link href={{ asset('bootstrap/css/main.css') }} rel="stylesheet">
</head>
<body>

{{----------------- Nav bar -----------------}}
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href={{route('login.index')}}><span>MANAGEMENT</span>SYSTEM</a>
			<ul class="nav navbar-top-links navbar-right">
				<li><a href={{route('signup.index')}}>Signup</a></li>
				<li><a href={{route('login.index')}}>Login</a></li>
			</ul>
		</div>
	</div><!-- /.container-fluid -->
</nav>
{{----------------- Nav bar end-----------------}}

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
						<form action="{{ route('Verification') }}" method="POST">
						<fieldset>
						<br/>
						<div class="form-group">
							<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
						</div>
						<br/>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
						</div>
						<br/>
						<input type="submit" class="btn btn-primary" name="login" value="Login">
						</fieldset>
						<br/>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src={{asset('bootstrap/js/jquery-1.11.1.min.js') }}></script>
<script src={{asset('bootstrap/js/bootstrap.min.js') }}></script>
</body>
</html>
