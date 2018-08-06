@extends('theme_u::theme/default')

@section('theme_u::theme/content')

    <div class='row'>
        <div class='col-md-8'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Hi, {{$items['data']['name']}}</b></h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <button type="button" id="editbtn" class="btn btn-primary">Edit</button>
                    <button type="button" id="lockbtn" class="btn btn-primary" style="display:none">Undo</button>
                    <hr>
                       @foreach($items['data'] as $key => $item)
                            <div class="col-md-6 form-group has-feedback">
                              <div class="input-group">
                                <span class="input-group-addon">{{$key}}</span>
                                <input type="text" class="inputform form-control" value="{{ $item }}" disabled="disable">
                              </div>
                            </div>
                       
                       @endforeach
                          
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
                    <h3 class="box-title">Second Box</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button><!-- 
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> -->
                    </div>
                </div>
                <div class="box-body">
                    <img src="asdasd" style="width:365px;max-width:365px;height:240px;">
                    <hr>
                    <button class="btn btn-primary">Preview</button>
                    <button class="btn btn-primary pull-right">Order</button>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->

<script>
$(document).ready(function(){
    $("#editbtn").click(function(){
        $('.inputform').prop( "disabled", false );
        $("#savebtn").show();
        $("#lockbtn").show();
        $('#editbtn').hide();
    });
    $("#savebtn").click(function(){
        alert('Updated');
        $('.inputform').prop( "disabled", true );
        $('#lockbtn').hide();
        $('#editbtn').show();
        $("#savebtn").hide();
    });
    $("#lockbtn").click(function(){
        $('.inputform').prop( "disabled", true );
        $('#lockbtn').hide();
        $("#editbtn").show();
        $("#savebtn").hide();
    });
});
</script>
@endsection