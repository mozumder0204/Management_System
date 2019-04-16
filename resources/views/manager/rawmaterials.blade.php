<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager - RAW Materials</title>
<link href={{ asset('bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
<link href={{ asset('bootstrap/css/datepicker3.css') }} rel="stylesheet">
<link href={{ asset('bootstrap/css/styles.css') }} rel="stylesheet">
<link href={{ asset('bootstrap/css/font-awesome.min.css') }} rel="stylesheet">
<script src={{ asset('bootstrap/js/jquery-1.11.1.min.js') }}></script>
<script src={{ asset('bootstrap/js/bootstrap.min.js') }}></script>
</head>
<body>
{{----------------- Nav bar -----------------}}
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href={{route('login.index')}}><span>MANAGEMENT</span>SYSTEM</a>
    </div>
</div><!-- /.container-fluid -->
</nav>
{{----------------- Nav bar end-----------------}}
{{----------------- Side bar -----------------}}

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{session('loggedUser')}}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li><a href={{route('manager.index')}}><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href={{route('manager.addFactory')}}><em class="fa fa-calendar">&nbsp;</em> ADD Factory</a></li>
        <li class="active"><a href={{route('manager.rawmaterials')}}><em class="fa fa-bar-chart">&nbsp;</em> RAW Materials</a></li>
        <li><a href={{route('manager.factoryShipment')}}><em class="fa fa-toggle-off">&nbsp;</em> Factory Shipment</a></li>
        <li><a href={{route('manager.factoryList')}}><em class="fa fa-clone">&nbsp;</em> List of Factory</a></li>
        <li><a href={{route('logout.index')}}><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->
{{----------------- Side bar end -----------------}}
{{----------------- Header/Title -----------------}}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">RAW Materials</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">RAW Materials</h1>
        </div>
    </div><!--/.row-->
{{----------------- Header/Title end-----------------}}
<br><br><br>

   
    
</body>
</html>