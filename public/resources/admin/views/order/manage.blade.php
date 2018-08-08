@extends('theme_a::theme/default')
@section('theme_a::content')
<section class="content-header">
    <h1>
        Set Order Quantity
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Order Management</li>
    </ol>
</section>
<section class="content">
    <!-- Info boxes -->
  <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary form-horizontal">
                <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Company</label>

                      <div class="col-sm-10">
                        <select class="defaultlevel btn btn-info">
                            <option value="1">Company A</option>
                            <option value="2">Company B</option>
                            <option value="3">Company C</option>
                            <option value="4">Company D</option>
                            <option value="5">Company E</option>
                            <option value="6">Company F</option>
                            <option value="7">Company G</option>
                            <option value="8">Company H</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Company</label>

                      <div class="col-sm-10">
                        <select class="defaultlevel btn btn-info">
                            <option value="1">Folder</option>
                            <option value="2">Namecard</option>
                            <option value="3">NRC</option>
                            <option value="4">Envelope</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">Current Min Quantity :</span>
                            <input type="text" class="inputform form-control" value="5" disabled="disable">
                        </div>
                    </div>
                    <br>
                    <div class="minq">
                    <label>Change Min Quantity :</label> 
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
                    <div class="maxq">
                    <label>Change Max Quantity :</label> 
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
                    <button type="button" id="savebtn" class="btn btn-primary pull-right">Save</button>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section>
<script>
$(document).ready(function(){
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
        alert('Quantity Changed!');
        window.location.href = '<?php echo route('aorder')?>';
        return false;
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
