@extends('theme_a::theme/default')
@section('theme_a::content')
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
                    <button type="button" id="editbtn" class="btn btn-info"><a style="text-decoration:none;color:white;" href="{{route('aapprovalstate')}}">Set Approval State</a></button>
                    <hr>
                    <table id="employeelist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quantity</th>
                                <th>Approvers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Company A</td>
                                <td>a@sg.com</td>
                                <td>4</td>
                                <td>1. Head A <br>
                                    2. Head C <br>
                                    3. Head B 
                                </td>
                            </tr>
                            <tr>
                                <td>Company B</td>
                                <td>b@sg.com</td>
                                <td>5</td>
                                <td>1. Head A <br>
                                    2. Head B <br>
                                    3. Head C <br>
                                    4. Head D 
                                </td>
                            </tr>
                            <tr>
                                <td>Company C</td>
                                <td>c@sg.com</td>
                                <td>1</td>
                                <td>1. Head E <br>
                                    2. Head F 
                                </td>
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
    $("#lockbtn").click(function(){
        $('.inputform').prop( "disabled", true );
        $('#lockbtn').hide();
        $("#editbtn").show();
        $("#savebtn").hide();
    });
});
</script>
@endsection 
