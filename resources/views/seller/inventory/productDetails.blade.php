<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Seller - Product Details</title>
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
        <li class="parent"><a data-toggle="collapse" href="#sub-item-1">
            <em class="fa fa-navicon">&nbsp;</em> Accounts <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a href={{route('seller.dailySells')}}>
                    <span class="fa fa-calendar">&nbsp;</span> Daily Sells
                </a></li>
                <li><a class="" href={{route('seller.POS')}}>
                    <span class="fa fa-bar-chart">&nbsp;</span> POS
                </a></li>
                <li><a class="" href={{route('seller.moneyTransfer')}}>
                    <span class="fa fa-toggle-off">&nbsp;</span> Money Transfer
                </a></li>
                <li><a class="" href={{route('seller.addCustomer')}}>
                    <span class="fa fa-clone">&nbsp;</span> ADD Customer
                </a></li>
            </ul>
        </li>
        <li class="parent active"><a data-toggle="collapse" href="#sub-item-2">
            <em class="fa fa-navicon">&nbsp;</em> Inventory <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children expand" id="sub-item-2">
                <li><a href={{route('seller.shipmentList')}}>
                    <span class="fa fa-calendar">&nbsp;</span> Shipment list
                </a></li>
                <li><a class="" href={{route('seller.addProduct')}}>
                    <span class="fa fa-bar-chart">&nbsp;</span> ADD Product
                </a></li>
                <li><a class="" href={{route('seller.productDetails')}}>
                    <span class="fa fa-toggle-off">&nbsp;</span> Product Datails
                </a></li>
                <li><a class="" href={{route('seller.shipmentReport')}}>
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
            <li class="active">Product Details</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product Details</h1>
        </div>
    </div><!--/.row-->
{{----------------- Header/Title end-----------------}}
<br><br><br>
<table border="2" style="width:50%;" align="center" class="table table-striped table-dark" >
    <tr>
        <th>Product Name</th>
        <th>Available Quantity</th>
    </tr>
    @foreach($detail as $details)
    <tr>
        <td>{{$details['product_name']}}</td>
        <td>{{$details['remaining']}}</td>
     </tr>
 @endforeach 
 
</table>


   
    
</body>
</html>