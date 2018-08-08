@extends('theme_s::theme/default')
@section('theme_s::content')
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
                    <button type="button" id="lockbtn" class="btn btn-primary">Export</button>
                    <button type="button" id="lockbtn" class="btn btn-warning pull-right">Add Company</button>
                    <hr>
                    <table id="employeelist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Site</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Company A</td>
                                <td>a.com</td>
                                <td>Singapore</td>
                                <td><a href="#"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                            <tr>
                                <td>Company B</td>
                                <td>b.com</td>
                                <td>Singapore</td>
                                <td><a href="#"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                            <tr>
                                <td>Company C</td>
                                <td>c.com</td>
                                <td>Singapore</td>
                                <td><a href="#"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                            <tr>
                                <td>Company D</td>
                                <td>d.com</td>
                                <td>Singapore</td>
                                <td><a href="#"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                        </tbody>    
                        <tfooter>
                            <tr>
                                <th>Name</th>
                                <th>Site</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </tfooter>
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
