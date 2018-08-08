@extends('theme_s::theme/default')
@section('theme_s::theme/content')
  <div class='row'>
        <div class='col-md-8'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Hi, {{Auth::user()->name}}</b></h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <button type="button" id="editbtn" class="btn btn-info"><a style="text-decoration:none;color:white;" href="{{route('approval.approvalstate')}}">Set Approval State</a></button>
                    <hr>
                    <table id="employeelist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quantity</th>
                                <th>Approver 1</th>
                                <th>Approver 2</th>
                                <th>Approver 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ka Shu</td>
                                <td>kashu@su.com</td>
                                <td>4</td>
                                <td><label class="input-sm">Head A</label> <button class="btn-sm btn btn-success pull-right"><i class="fa fa-check"></i></button></td>
                                <td><label class="input-sm">Boss A</label> <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i></button></td>
                                <td><label class="input-sm">Boss B</label> <button class="btn btn-sm btn-success pull-right"><i class="fa fa-check"></i></button></td>
                            </tr>
                            <tr>
                                <td>Lee Ya</td>
                                <td>leeya@su.com</td>
                                <td>5</td>
                                <td><label class="input-sm">Head A</label> <button class="btn-sm btn btn-success pull-right"><i class="fa fa-check"></i></button></td>
                                <td><label class="input-sm">Boss A</label> <button class="btn btn-sm btn-warning pull-right"><i class="fa fa-spinner fa-spin"></i></button></td>
                                <td><label class="input-sm">Boss B</label> <button class="btn btn-sm btn-warning pull-right"><i class="fa fa-spinner fa-spin"></i></button></td>
                            </tr>
                            <tr>
                                <td>Kia Su</td>
                                <td>kiasu@su.com</td>
                                <td>1</td>
                                <td><label class="input-sm">Head A</label> <button class="btn-sm btn btn-danger pull-right"><i class="fa fa-times"></i></button></td>
                                <td><label class="input-sm">Boss A</label> <button class="btn btn-sm btn-warning pull-right"><i class="fa fa-spinner fa-spin"></i></button></td>
                                <td><label class="input-sm">Boss B</label> <button class="btn btn-sm btn-warning pull-right"><i class="fa fa-spinner fa-spin"></i></button></td>
                            </tr>
                          
                        </tfooter>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" id="savebtn" class="btn btn-primary" style="display:none">Save</button>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-4'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Template</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button><!-- 
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> -->
                    </div>
                </div>
                <div class="box-body">
                    <label class="pull-left" style="margin-top:10px">Upload : </label><input type="file" name="templateupload" class="pull-left" style="text-decoration:none;margin-left:3px;margin-top:7.5px">
                    <button class="btn btn-primary pull-right">Upload</button>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
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
