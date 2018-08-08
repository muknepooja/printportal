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
                    <a href="{{ route('smanage')}}"><button type="button" id="lockbtn" class="btn btn-primary pull-right">Add New</button></a>
                    <hr>
                    <table id="employeelist" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Min Quantity</th>
                                <th>Max Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Folder</td>
                                <td>Company A</td>
                                <td>5</td>
                                <td>20</td>
                                <td><a href="{{ route('smanage')}}"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                            <tr>
                                <td>NameCard</td>
                                <td>Company B</td>
                                <td>12</td>
                                <td>40</td>
                                <td><a href="{{ route('smanage')}}"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                            <tr>
                                <td>NameCard</td>
                                <td>Company A</td>
                                <td>12</td>
                                <td>50</td>
                                <td><a href="{{ route('smanage')}}"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                            <tr>
                                <td>Folder</td>
                                <td>Company C</td>
                                <td>5</td>
                                <td>20</td>
                                <td><a href="{{ route('smanage')}}"><button class="btn btn-primary">Update</button></a></td>
                            </tr>
                        </tbody>    
                        <tfooter>
                            <tr>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Min Quantity</th>
                                <th>Max Quantity</th>
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
@endsection 
