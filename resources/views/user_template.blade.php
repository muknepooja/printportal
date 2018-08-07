<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Print Portal | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/skins/_all-skins.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-purple-light sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>P</b>p</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Print</b>Management</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-inbox"></i>
                                    <span class="label label-danger">5</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 5 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-aqua"></i> 5 new order received 
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 9 orders pending for approval
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('bower_components/admin-lte/dist/img/user.jpeg') }}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Aaron Theam</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ asset('bower_components/admin-lte/dist/img/user.jpeg') }}" class="img-circle" alt="User Image">

                                        <p>
                                            Aaron Theam - Employee
                                            <small>Member since Aug. 2018</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview menu-open">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Profile</span>
                                <!--<span class="pull-right-container">
                                    <small class="label pull-right bg-yellow">12</small>
                                    <small class="label pull-right bg-green">16</small>
                                    <small class="label pull-right bg-red">5</small>
                                </span>-->
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-shopping-cart "></i> <span>Orders</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('order')}}"><i class="fa fa-circle-o"></i> Namecard </a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Folder </a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-truck"></i> <span>Delivery</span>
                                <!--<span class="pull-right-container">
                                    <small class="label pull-right bg-yellow">12</small>
                                    <small class="label pull-right bg-green">16</small>
                                    <small class="label pull-right bg-red">5</small>
                                </span>-->
                            </a>
                        </li>
                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                                <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                            </ul>
                        </li>-->
                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Level One
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li class="treeview">
                                            <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Orders</span>
                                    <span class="info-box-number">15</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Completed Orders</span>
                                    <span class="info-box-number">12</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Pending Orders</span>
                                    <span class="info-box-number">2</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- MAP & BOX PANE -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Stationaary Orders</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="chart-responsive">
                                                <canvas id="pieChart" height="339px"></canvas>
                                            </div>
                                            <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <ul class="chart-legend clearfix">
                                                <li><i class="fa fa-circle-o text-red"></i> Namecard</li>
                                                <li><i class="fa fa-circle-o text-green"></i> Folder</li>
                                            </ul>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-6">
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Monthly Recap Report</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">

                                        <p class="text-center">
                                            <strong>Orders: 1 Jan, 2018 - 31 Jul, 2018</strong>
                                        </p>

                                        <div class="chart">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="barChart"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">All Orders</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">New Orders</a></li>
                                    <li><a href="#tab_3" data-toggle="tab">Approved Orders</a></li>
                                    <li><a href="#tab_4" data-toggle="tab">Completed Orders</a></li>
                                    <li><a href="#tab_5" data-toggle="tab">Pending Orders</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Item</th>
                                                            <th>Status</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                            <td>Namecard</td>
                                                            <td><span class="label label-info">New</span></td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                                            <td>Folder</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                                            <td>Namecard</td>
                                                            <td><span class="label label-success">Delivered</span></td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                                            <td>Namecard</td>
                                                            <td><span class="label label-warning">Approved</span></td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR6573</a></td>
                                                            <td>Folder</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <div class="box-footer clearfix">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Item</th>
                                                            <th>Status</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                            <td>Namecard</td>
                                                            <td><span class="label label-info">New</span></td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                            <td>Folder</td>
                                                            <td><span class="label label-info">New</span></td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                            <td>Folder</td>
                                                            <td><span class="label label-info">New</span></td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                            <td>Namecard</td>
                                                            <td><span class="label label-info">New</span></td>
                                                            <td>2</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                            <td>Namecard</td>
                                                            <td><span class="label label-info">New</span></td>
                                                            <td>2</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <div class="box-footer clearfix">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View New Orders</a>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_3">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Item</th>
                                                            <th>Company Name</th>
                                                            <th>Order By</th>
                                                            <th>Status</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                                            <td>NRC</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-warning">Approved</span></td>
                                                            <td>50</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                                            <td>NRC</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-warning">Approved</span></td>
                                                            <td>50</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                                            <td>NRC</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-warning">Approved</span></td>
                                                            <td>50</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                                            <td>NRC</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-warning">Approved</span></td>
                                                            <td>50</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                                            <td>NRC</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-warning">Approved</span></td>
                                                            <td>50</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <div class="box-footer clearfix">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View Approved Orders</a>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_4">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Item</th>
                                                            <th>Company Name</th>
                                                            <th>Order By</th>
                                                            <th>Status</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                                            <td>Envelope</td>
                                                            <td>EY</td>
                                                            <td>Gyn Rahu</td>
                                                            <td><span class="label label-success">Delivered</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                                            <td>Envelope</td>
                                                            <td>EY</td>
                                                            <td>Gyn Rahu</td>
                                                            <td><span class="label label-success">Delivered</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                                            <td>Envelope</td>
                                                            <td>EY</td>
                                                            <td>Gyn Rahu</td>
                                                            <td><span class="label label-success">Delivered</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                                            <td>Envelope</td>
                                                            <td>EY</td>
                                                            <td>Gyn Rahu</td>
                                                            <td><span class="label label-success">Delivered</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                                            <td>Envelope</td>
                                                            <td>EY</td>
                                                            <td>Gyn Rahu</td>
                                                            <td><span class="label label-success">Delivered</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <div class="box-footer clearfix">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View Delivered Orders</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_5">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table class="table no-margin">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Item</th>
                                                            <th>Company Name</th>
                                                            <th>Order By</th>
                                                            <th>Status</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                                            <td>Folder</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                                            <td>Folder</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                                            <td>Folder</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                                            <td>Folder</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                                            <td>Folder</td>
                                                            <td>EY</td>
                                                            <td>Ram Yu</td>
                                                            <td><span class="label label-danger">Pending</span></td>
                                                            <td>20</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <div class="box-footer clearfix">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View Pending Orders</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- nav-tabs-custom -->
                        </div>
                        <!-- /.row -->
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Times Printers Pte Ltd</a>.</strong> All rights
                reserved.
            </footer>            
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 3 -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap  -->
        <script src="{{ asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('bower_components/admin-lte/dist/js/pages/userdashboard.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('bower_components/admin-lte/dist/js/demo.js') }}"></script>
    </body>
</html>
