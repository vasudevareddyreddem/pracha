<?php //echo '<pre>';print_r($userdetails);exit;?>
<style>
.side-bar{
    height: 600px;
    overflow-y:scroll;
    padding-bottom:100px;
}
/* width */
.side-bar::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.side-bar::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
.side-bar::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
.side-bar::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<div class="col-md-3 bg-dark col-xs-12 pos-fix sm-hide" style="width:20%;padding-right:0px;">
	<ul class="side-bar collapsible collapsible-accordions">
    <?php if($userdetails['role']==9) { ?>
      <a href="<?php echo base_url('employee/profile'); ?>"><li> Employee Profile</li></a>
					<li class="arrow-r">
						<a class="collapsible-header waves-effect ">Projects</a><i class="fa fa-angle-down rotate-icon pull-right"></i>
                            <div class="collapsible-body" style="display: none;">
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url('employee/add_project'); ?>" class="waves-effect">Add Project</a>
                                    </li>  
									<li><a href="<?php echo base_url('employee/project_type_list'); ?>" class="waves-effect"> Project List</a>
                                    </li>	
									
                                    
                                </ul>
                            </div>
                        </li>
						<li class="arrow-r">
						<a class="collapsible-header waves-effect ">Work Assign</a><i class="fa fa-angle-down rotate-icon pull-right"></i>
                            <div class="collapsible-body" style="display: none;">
                                <ul class="list-unstyled">
									<li><a href="<?php echo base_url('employee/project_work_assign'); ?>" class="waves-effect">Work Assign</a>
                                    </li>
									<li><a href="<?php echo base_url('employee/project_work_assign_list'); ?>" class="waves-effect">Work Assign List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
	 
    <?php }else{ ?>

		<a href="<?php echo base_url('employee/profile'); ?>"><li> Employee Profile</li></a>
		<?php if($userdetails['role']==1 || $userdetails['role']==2){ ?>
		<a href="<?php echo base_url('employee/reportlist'); ?>"><li>Daily WorkMangagment  </li></a>
		<a href="<?php echo base_url('employee/employeelist'); ?>"><li>Employee List</li></a>
		<?php }else{ ?>
		<a href="<?php echo base_url('employee/report'); ?>"><li>Daily WorkMangagment </li></a>
		<?php } ?>
		<?php if($userdetails['role']==1 || $userdetails['role']==2){ ?>
		<a href="<?php echo base_url('employee/leaveslist'); ?>"><li>Leave Management</li></a>
		<a href="<?php echo base_url('employee/holidays_list'); ?>"><li>Holidays List</li></a>
		<a href="<?php echo base_url('employee/payslips'); ?>"><li>Pay Slips</li></a>
		<a href="<?php echo base_url('employee/suggestion'); ?>"><li>Complaint/ Suggestion Box</li></a>
		<a href="<?php echo base_url('employee/task'); ?>"><li>Task Mangagment </li></a>
		<a href="<?php echo base_url('employee/last_month_login_report'); ?>"><li>Last Month Login A & Logout TIme Sheet</li></a>
		<?php }else{  ?>
		<a href="<?php echo base_url('employee/leaves'); ?>"><li>Leave Management</li></a>
		<a href="<?php echo base_url('employee/holidays_list'); ?>"><li>Holidays List</li></a>
		<a href="<?php echo base_url('employee/payslip'); ?>"><li>Pay Slips</li></a>
		<a href="<?php echo base_url('employee/suggestion'); ?>"><li>Complaint/ Suggestion Box</li></a>
		<a href="<?php echo base_url('employee/task'); ?>"><li>Task Mangagment </li></a>

		<?php } ?>
		<?php if($userdetails['role']==1 || $userdetails['role']==4){ ?>
			<a href="<?php echo base_url('payment/billing'); ?>"><li>Billing</li></a>
			<a href="<?php echo base_url('payment/bill_list'); ?>"><li>Invoice List</li></a>
		<?php } ?>
		<?php if( $userdetails['role']==4){ ?>
		<a href="<?php echo base_url('employee/sales');?>"><li>Sales</li></a>
		<?php } ?>
        <a href="<?php echo base_url('project/add_website'); ?>"><li>Add Project Type </li></a>
        <a href="<?php echo base_url('project/project_type_list'); ?>"><li>Project Type List</li></a>
        <a href="<?php echo base_url('role/add_role'); ?>"><li>Add Role </li></a>
        <a href="<?php echo base_url('role/role_list'); ?>"><li>Role List</li></a>
        <a href="<?php echo base_url('project/add_project'); ?>"><li>Add Project Details</li></a>
        <a href="<?php echo base_url('project/project_list'); ?>"><li>Project List</li></a>
        <a href="<?php echo base_url('project/assign_project'); ?>"><li>Assign Project </li></a>
        <a href="<?php echo base_url('department/add_department'); ?>"><li>Add Department </li></a>
        <a href="<?php echo base_url('department/department_list'); ?>"><li>Department List</li></a>
      <?php }?>
	</ul>
</div>
