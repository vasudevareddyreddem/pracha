<div class="container-sty-adm ">
    <div class=" row justify-content-md-end">
	
        <div class="col-md-9   card mt-10">
            <div class="row">
                <form  id="add_type" action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="row">
                           

                            <div class="col-md-12">
                                <h3 class=" text-center"> Add Project Details</h3>
                                <hr>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder=" Enter Project Name"  value=""  required>
                            </div>  
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Type</label>
                             <select class="mdb-select md-form">
							  <option value="" disabled selected>Choose your Project Type</option>
							  <option value="1">Dynamic</option>
							  <option value="2">Static</option>
							  
							</select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Project Started Date</label>
                                <input type="date" class="form-control" name='sdate' id="name" placeholder=" Enter Start Date"  value=""  required>
                            </div>
							<div class="form-group col-md-6">
                                <label for="">Framework</label>
                                <input type="text" class="form-control" name='sdate' id="name" placeholder=" Enter frame work"  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Estimated Days</label>
                                <input type="text" class="form-control" name="est" id="name" placeholder=" Enter Estimated Days"  value=""  required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Name</label>
                                <input type="text" class="form-control" name="clt_name" id="name" placeholder=" Enter Client Name"  value=""  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Number</label>
                                <input type="text" class="form-control" name="clt_num" id="name" placeholder=" Enter Client Number"  value=""  required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername">Client Email</label>
                                <input type="text" class="form-control" name="clt_email" id="name" placeholder=" Enter Client Email"  value=""  required>
                            </div> 
							<div class="form-group col-md-6">
                                <label for="exampleInputUsername">Upload Project Document or Description</label>
                                <input type="file" class="form-control" name="clt_email"  value=""  required>
                            </div>
                         





                        </div>
                        <a href="<?php echo base_url('employee/project_type_list'); ?>" class="btn btn-primary btn-sm"  class="btn btn-dark">Add</a>


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $('select').addClass('mdb-select');
        $('.mdb-select').material_select();
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_type').bootstrapValidator({

            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message:'Question wont allow <> [] = % '
                        },
                        remote: {
                            message: 'Type already exists',
                            url: '<?php echo base_url('project/check_project_type'); ?>',
                            data: {
                                type: 'name'
                            }
                        }
                    }
                },



            }
        })

    });

</script>


