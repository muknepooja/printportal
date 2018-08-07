@extends('theme_uadmin::theme/default')

@section('theme_uadmin::theme/content')

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

                    <button type="button" id="lockbtn" class="btn btn-primary pull-right">Export</button>
                    <button type="button" id="editbtn" class="btn btn-warning">Import</button>
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