<form action="<?= base_url()?>designation_update/<?= $desg->desg_id ?>" method="POST" class="form-horizontal">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Edit Designation info</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label col-md-4" style="padding-right: 0px">Designation Title <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" name="desg_name" value="<?= $desg->desg_name?>"  class="form-control input-height" />
						</div>
					</div>
					<button type="submit"  class="btn btn-info m-r-20 pull-right">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>
