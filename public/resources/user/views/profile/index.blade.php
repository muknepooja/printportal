@extends('theme_u::theme/default')
@section('theme_u::content')
<section class="content-header">
    <h1>
        {{ $page_title or "Namecard" }}
        <small>{{ $page_description or null }}</small>
    </h1>
    <!-- You can dynamically generate breadcrumbs here -->
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Order</li>
        <li class="active">Namecard</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-info">
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
    </div><!-- /.row -->
</section>
<script>
    $(document).ready(function () {
        $("#editbtn").click(function () {
            $('.inputform').prop("disabled", false);
            $("#savebtn").show();
            $("#lockbtn").show();
            $('#editbtn').hide();
        });
        $("#savebtn").click(function () {
            alert('Data saved successfully');
            $('.inputform').prop("disabled", true);
            $('#lockbtn').hide();
            $('#editbtn').show();
            $("#savebtn").hide();
        });
        $("#lockbtn").click(function () {
            $('.inputform').prop("disabled", true);
            $('#lockbtn').hide();
            $("#editbtn").show();
            $("#savebtn").hide();
        });
    });
</script>
@endsection