@extends('theme_uadmin::theme/default')

@section('theme_uadmin::theme/content')

  <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Hi, {{Auth::user()->name}}</b></h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                <button type="button" id="editbtn" class="btn btn-primary">Edit Quantity</button>
                <button type="button" id="cancelbtn" class="btn btn-primary" style="display:none">Cancel</button>
                <hr>
                <div class="col-md-6">
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">Current Min Quantity :</span>
                            <input type="text" class="inputform form-control" value="5" disabled="disable">
                        </div>
                    </div>
                    <br>
                    <div align="center" class="minq" style="display: none">
                    <label>Select Min Quantity :</label> 
                    <select class="defaultlevel btn btn-info">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">Current Max Quantity :</span>
                            <input type="text" class="inputform form-control" value="7" disabled="disable">
                        </div>
                    </div>
                    <br>
                    <div align="center" class="maxq" style="display: none">
                    <label>Select Max Quantity :</label> 
                    <select class="defaultlevel btn btn-info" >
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    </div> 
                </div>           
                    <hr>
                    
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" id="savebtn" class="btn btn-primary pull-right" style="display:none">Save</button>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->

<script>
$(document).ready(function(){
    $('#employeelist').DataTable();

    $("#editbtn").click(function(){
        $('#editbtn').hide();
        $('#cancelbtn').show();
        $('.minq').show();
        $(".maxq").show();
        $("#savebtn").show();
    });

    $("#cancelbtn").click(function(){
        $('#cancelbtn').hide();
        $('#editbtn').show();
        $('.minq').hide();
        $(".maxq").hide();
        $("#savebtn").hide();
    });

    $('#savebtn').click(function(){
        $.confirm({
                atitle: 'Confirm!',
            content: 'Are you sure change the Quantity?!',
            buttons: {
                confirm: function () {
                    $.alert('Quantity Changed!');
                },
                cancel: function () {
                    $.alert('Canceled!');
                }
            }
        });
    });
});
</script>
@endsection