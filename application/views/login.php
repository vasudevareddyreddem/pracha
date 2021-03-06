
<section id="team-scroll" class="our_service padding-10 ptb-xs-60 bod-st  form-elegant">
  

    <!--Form without header-->
    <div class="  row justify-content-md-center">

		<div class="card-body mx-4 card col-md-4 col-xs-12 " id="logindiv">
		<?php if($this->session->flashdata('success')): ?>
		<div class="alert alert-success">
		<strong><?php echo $this->session->flashdata('success'); ?></strong> 
		</div>

		<?php endif; ?>
		<?php if($this->session->flashdata('loginerror')): ?>
		<div class="alert alert-warning">
		<strong><?php echo $this->session->flashdata('loginerror'); ?></strong> 
		</div>

		<?php endif; ?>
            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>
            </div>

            <!--Body-->
			<form action="<?php echo base_url('employee/loginpost'); ?>" method="post" >
            <div class="md-form">
                <input type="text" id="emp_email" name="emp_email"  class="form-control" autocomplete="off">
                <label for="Form-email1">Your email</label>
            </div>

            <div class="md-form pb-3">
                <input type="password" id="emp_password" name="emp_password" class="form-control">
                <label for="Form-pass1">Your password</label>
                <p class="font-small blue-text d-flex justify-content-end">Forgot <a onclick="forgotpassword();" class="blue-text ml-1"> Password?</a></p>
            </div>

            <div class="text-center mb-3">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
            </div>
			</form>

        </div>
		<div class="clearfix"> &nbsp;</div>
		<div class="card-body mx-4 card col-4 " id="forgotpass" style="display:none;">

            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>Forgot Password</strong></h3>
            </div>

            <!--Body-->
			<form action="<?php echo base_url('employee/forgotpassword'); ?>" method="post" >
            <div class="md-form">
                <input type="text" id="emp_email" name="emp_email"  class="form-control">
                <label for="Form-email1">Enter Register Email</label>
            </div>
				<div class="text-center mb-3">
                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Forgot</button>
            </div>
			</form>

        </div>
		
		
			
     
    </div>
    <!--/Form without header-->

</section>
<script>
function forgotpassword(){
	$('#logindiv').hide();
	$('#forgotpass').show();
}
</script>
            
