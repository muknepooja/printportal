@extends('theme_a::theme/default')
@section('theme_a::content')
<section class="content-header">
    <h1>
        Pending for Approval
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approval Management</li>
    </ol>
</section>
<section class="content">
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-info">
                <div class="box-body">
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
    </div><!-- /.row -->
</section>
<script>
    $(document).ready(function () {
        $('#employeelist').DataTable();
        $("#lockbtn").click(function () {
            $('.inputform').prop("disabled", true);
            $('#lockbtn').hide();
            $("#editbtn").show();
            $("#savebtn").hide();
        });
        document.addEventListener("change", function (event) {
            let element = event.target;
            if (element && element.matches(".form-element-field")) {
                element.classList[element.value ? "add" : "remove"]("-hasvalue");
            }
        });
    });
</script>
@endsection 
