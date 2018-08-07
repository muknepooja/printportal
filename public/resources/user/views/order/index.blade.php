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
            <div class="box box-info collapsed-box">
                <div class="box-header with-border">
                    <div class="user-block">
                        <span class="username"><a href="#">Lim Chee Siong Josef</a></span>
                        <span class="description">Manager</span>
                    </div>

                    <div class="box-tools pull-right">
                        <button type="button" id="editbtn" class="btn btn-primary">Edit</button>
                        <button type="button" id="lockbtn" class="btn btn-primary" style="display:none">Undo</button>
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="box-body">
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
        <div class='col-md-12'>
            <div class="box box-info">
                
               
                <div class="box-body">
                    <div class="col-md-6">
                        <img class="img-responsive pad" src="{{ asset('bower_components/admin-lte/dist/img/josefnamecard.jpg') }}" alt="Photo">
                    </div> 
                </div>
                 <div class="box-body">
                    <div class="col-md-4 input-group">
                        <span class="input-group-addon">Quantity</span>
                        <input type="number" class="inputform form-control" min="14" value="14">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                   
                    <div class="col-md-6 input-group">
                        <button type="button" id="orderbtn" class="btn btn-primary" style="">Order</button>
                    </div>
                    
                    <!-- /.box-comment -->

                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
            </div>
        </div>
    </div><!-- /.row -->
</section>
<script>
    $(document).ready(function () {
        $("#editbtn").hide();
        $(".btn-box-tool").click(function () {
            $("#editbtn").toggle();
        });
        $("#editbtn").click(function () {
            $('.inputform').prop("disabled", false);
            $("#savebtn").show();
            $("#lockbtn").show();
            $('#editbtn').hide();
        });
        $("#orderbtn").click(function () {
            alert('Your order has been placed successfully.');
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