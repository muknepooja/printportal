@extends('theme_u::theme/default')
@section('theme_u::content')
<section class="content-header">
    <h1>
        Manage Approval
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approval Management</li>
    </ol>
</section>
<section class="content">
    <!-- Info boxes -->
  <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-body">
                    <button type="button" id="editbtn" class="btn btn-primary ">Export</button>
                    <hr>
                    <table id="employeelist" class="table table-striped table-bordered" style="width:100%">
                        <div class="box-body">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Namecard</td>
                                    <td>2</td>
                                    <td><span class="label label-info">New</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR4719</a></td>
                                    <td>Folder</td>
                                    <td>3</td>
                                    <td><span class="label label-danger">Pending</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR3851</a></td>
                                    <td>Envelope</td>
                                    <td>5</td>
                                    <td><span class="label label-success">Delivered</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR5631</a></td>
                                    <td>Namecard</td>
                                    <td>2</td>
                                    <td><span class="label label-warning">Approved</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR6573</a></td>
                                    <td>Folder</td>
                                    <td>4</td>
                                    <td><span class="label label-danger">Pending</span></td>
                                   
                                </tr>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </tfooter>
                            <!-- /.table-responsive -->
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" id="savebtn" class="btn btn-primary" style="display:none">Save</button>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section>
<script>
$(document).ready(function(){
    $('#employeelist').DataTable();
});
</script>
@endsection 
