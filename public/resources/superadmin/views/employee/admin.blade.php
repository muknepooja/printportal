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
                    <button type="button" id="lockbtn" class="btn btn-primary pull-right">Export</button>
                    <button type="button" id="editbtn" class="btn btn-warning">Add Admin</button>
                    <hr>
                    <table id="employeelist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Mobile</th>
                                <th>Direct</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Aaron</td>
                                <td>dada@su.com</td>
                                <td>Operator</td>
                                <td>Production</td>
                                <td>6666 6666</td>
                                <td>8888 8888</td>
                            </tr>
                            <tr>
                                <td>Aaron</td>
                                <td>dada@su.com</td>
                                <td>Operator</td>
                                <td>Production</td>
                                <td>6666 6666</td>
                                <td>8888 8888</td>
                            </tr>
                            <tr>
                                <td>Aaron</td>
                                <td>dada@su.com</td>
                                <td>Operator</td>
                                <td>Production</td>
                                <td>6666 6666</td>
                                <td>8888 8888</td>
                            </tr>
                            <tr>
                                <td>Aaron</td>
                                <td>dada@su.com</td>
                                <td>Operator</td>
                                <td>Production</td>
                                <td>6666 6666</td>
                                <td>8888 8888</td>
                            </tr>
                        </tbody>    
                        <tfooter>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Mobile</th>
                                <th>Direct</th>
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
