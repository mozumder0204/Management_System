<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Seller - Dashboard</title>
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
        <li><a href={{route('seller.index')}}><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="parent active"><a data-toggle="collapse" href="#sub-item-1">
            <em class="fa fa-navicon">&nbsp;</em> Accounts <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children expand" id="sub-item-1">
                <li><a href={{route('seller.dailySells')}}>
                    <span class="fa fa-calendar">&nbsp;</span> Daily Sells
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-bar-chart">&nbsp;</span> POS
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-toggle-off">&nbsp;</span> Money Transfer
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-clone">&nbsp;</span> ADD Customer
                </a></li>
            </ul>
        </li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
            <em class="fa fa-navicon">&nbsp;</em> Inventory <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a href="#">
                    <span class="fa fa-calendar">&nbsp;</span> Shipment list
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-bar-chart">&nbsp;</span> ADD Product
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-toggle-off">&nbsp;</span> Product Datails
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-clone">&nbsp;</span> Shipment report
                </a></li>
            </ul>
        </li>
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
            <li class="active">Daily Sells</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daily Sells</h1>
        </div>
    </div><!--/.row-->
{{----------------- Header/Title end-----------------}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Daily Sells</div>
            <div class="panel-body">
                    <form method="POST">
                    <fieldset>
                    <br/>
                    <div class="form-group">
                        <input class="form-control" placeholder="Customer Name..." name="cname" type="text"
                        autofocus="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Product Name..." name="pname" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Quantity..." name="quantity" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Rate($)..." name="rate" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Total Amount..." name="amount" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Amount Paid..." name="paid" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Amount left..." name="left" type="text">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT">
                    </fieldset>
                    <br/>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->


   
    
</body>
</html>