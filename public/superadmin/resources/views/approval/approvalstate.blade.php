@extends('theme_su::theme/default')

@section('theme_su::theme/content')

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
                    <button type="button" id="back" class="btn btn-info"><a style="text-decoration:none;color:white;" href="{{route('approval.index')}}">Back</a></button>
                    <hr>
                   <form>
        <div class="form-radio form-radio-inline">
            <div class="">Approval Set :</div>
            <br>
            <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio" required value="Default" />
                <i class="form-radio-button"></i>
                <span>Default</span>
            </label>
            <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio" required value="Department" />
                <i class="form-radio-button"></i>
                <span>Department</span>
            </label>
        </div>
        <div class="form-actions">
        <button class="form-btn" type="submit">Send inquiry</button>
        <button class="form-btn-cancel -nooutline" type="reset">Cancel</button>
    </div>
</form>
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
    document.addEventListener("change", function(event) {
	  let element = event.target;
	  if (element && element.matches(".form-element-field")) {
	    element.classList[element.value ? "add" : "remove"]("-hasvalue");
	  }
	});
});
</script>
@endsection