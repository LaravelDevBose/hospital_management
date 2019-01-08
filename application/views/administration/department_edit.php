<form action="<?= base_url()?>department_update/<?= $department->dept_id ?>" method="POST" class="form-horizontal" >
	<div class="card card-topline-red" style="width: 100%!important;">
		<div class="card-head">
			<header>Edit Department info</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label col-md-4" style="padding-right: 0px">Department Title <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" name="dept_name" value="<?= $department->dept_name; ?>"  class="form-control input-height" />
						</div>
					</div>
					<button type="submit"  class="btn btn-info m-r-20 pull-right">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>

