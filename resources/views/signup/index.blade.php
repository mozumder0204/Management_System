<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<link href={{ asset('bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
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
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<br/>
		<div class="row">
			<div class="col-lg-12">
				<h2>Signup</h2>
			</div>
		</div>	
		<br/>
		<div class="row">	
			<div class="col-md-6">
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay">
					<a href={{route('signup.seller')}} style="color:white">Signup as SELLER</a>
					 </div>
				</div>
			</div><!--/.col-->
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-orange">
					<div class="panel-heading dark-overlay">
					<a href={{route('signup.admin')}} style="color:white">Signup as ADMIN</a>	
					</div>
				</div>
			</div><!--/.col-->
		</div>
	</div><!--/.main-->
	
	
</body>
</html>
