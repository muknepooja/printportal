@extends('theme_su::theme/default')

@section('theme_su::theme/content')

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
                   <form>
                <div class="box-body">
                    <button type="button" id="back" class="btn btn-info"><a style="text-decoration:none;color:white;" href="{{route('approval.index')}}">Back</a></button>
                    <hr>
        <div class="form-radio form-radio-inline">
            <label class="form-radio-label">Approval Set :</label>
            <label class="form-radio-label">
                <input id="default" class="form-radio-field" type="checkbox" required value="Default" />
                <i class="form-radio-button"></i>
                <span>Default</span>
            </label>
            <label class="form-radio-label">
                <input id="department" class="form-radio-field" type="checkbox" required value="Department" />
                <i class="form-radio-button"></i>
                <span>Department</span>
            </label>
        </div>
        <div class="defaultset col-md-6" style="display: none">
        	<label>Default :</label> 
        	<select class="defaultlevel btn btn-info">
        		<option value=""></option>
        		<option value="1">1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        	</select>
        	<br/>
        	<br/>
        	<div class="emaildef">
        		
        	</div>
        </div>
        <div class="departmentset col-md-6"  style="display: none">
        	<label>Department :</label>
        	<select class="departmenttlevel btn btn-info">
        		<option value=""></option>
        		<option value="1">1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        	</select>
        	<br/>
        	<br/>
        	<div class="emaildept">
        		
        	</div>
        </div>
        <div class="form-actions">

        
    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
        			<button class="btn btn-primary pull-right" type="submit">Send inquiry</button>
                </div><!-- /.box-footer-->
                </form>
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->

<script>
    $('#default').click(function(){
    	if($(this).is(':checked')) {
		    $(".defaultset").show();
		} else {
		    $(".defaultset").hide();
		}
	});

    $('#department').click(function(){
    	if($(this).is(':checked')) {
		    $(".departmentset").show();
		} else {
		    $(".departmentset").hide();
		}
	});

	$('.defaultlevel').change(function () {
		$('.emaildef').empty();
		var level = $(this).val();
		for (var i = 0; i < level; i++) {
			var l = i+1;
			var cell = '<div class="col-md-12 form-group has-feedback"> <div class="input-group"> <span class="input-group-addon">Email '+ l+'</span> <input type="text" class="inputform form-control" name="defaultemail'+l+'"> </div> </div>'
			
            $('.emaildef').append(cell);

		}
	});

	$('.departmenttlevel').change(function () {
		$('.emaildept').empty();
		var level = $(this).val();
		for (var i = 0; i < level; i++) {
			var l = i+1;
			var cell = '<div class="col-md-12 form-group has-feedback"> <div class="input-group"> <span class="input-group-addon">Email '+ l+'</span> <input type="text" class="inputform form-control" name="departmentemail'+l+'"> </div> </div>'
			
            $('.emaildept').append(cell);

		}
	});

</script>
@endsection