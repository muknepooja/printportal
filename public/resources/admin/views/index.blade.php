@extends('theme_a::theme/default')
@section('theme_a::content')
<!-- Content Header (Page header) -->
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
                    <span class="info-box-number">10,673</span>
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
                    <span class="info-box-number">10,100</span>
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
                    <span class="info-box-number">573</span>
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
                                <li><i class="fa fa-circle-o text-green"></i> Folders</li>
                                <li><i class="fa fa-circle-o text-yellow"></i> Envelope</li>
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
                                            <th>Company Name</th>
                                            <th>Order By</th>
                                            <th>Status</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Alex Win</td>
                                            <td><span class="label label-info">New</span></td>
                                            <td>30</td>
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
                                            <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                            <td>Envelope</td>
                                            <td>EY</td>
                                            <td>Gyn Rahu</td>
                                            <td><span class="label label-success">Delivered</span></td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Ram Yu</td>
                                            <td><span class="label label-warning">Approved</span></td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR6573</a></td>
                                            <td>Folder</td>
                                            <td>EY</td>
                                            <td>Ram Yu</td>
                                            <td><span class="label label-danger">Pending</span></td>
                                            <td>10</td>
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
                                            <th>Company Name</th>
                                            <th>Order By</th>
                                            <th>Status</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Alex Win</td>
                                            <td><span class="label label-info">New</span></td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Alex Win</td>
                                            <td><span class="label label-info">New</span></td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Alex Win</td>
                                            <td><span class="label label-info">New</span></td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Alex Win</td>
                                            <td><span class="label label-info">New</span></td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Namecard</td>
                                            <td>EY</td>
                                            <td>Alex Win</td>
                                            <td><span class="label label-info">New</span></td>
                                            <td>30</td>
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
<script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
<script src="{{ asset('bower_components/admin-lte/dist/js/pages/admindashboard.js') }}"></script>
@endsection