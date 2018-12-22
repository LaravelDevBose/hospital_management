<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/11/2018-->
<!-- * Time: 10:35 AM-->
<!-- */-->
<style>
	.alert-danger {
		color: #000000eb;
		background-color: #ff0f0f9e;
	}
	.alert-warning{
		color: #000000eb;
		background-color: #E67D21;
	}
	.alert-success{
		color: #000000eb;
		background-color: #5FC29D;
	}
	.alert-info{
		color: #000000eb;
		background-color: #3598dc;
	}
</style>


<div class="page-bar">
	<div class="page-title-breadcrumb">
		<?php if(validation_errors()){ ?>
			<div class="alert alert-warning alert-bordered" data-layout="topRight" data-type="error">
				<button type="button"  class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
				<?php echo validation_errors(); ?>
			</div>
		<?php } ?>

		<?php if($this->session->flashdata('error')) : ?>
		<div class="alert alert-danger " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Warning!</strong> <?php echo $this->session->flashdata('error'); ?>
		</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('success')) : ?>
			<div class="alert alert-success " role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> <?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('info')) : ?>
			<div class="alert alert-info " role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> <?php echo $this->session->flashdata('info'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
