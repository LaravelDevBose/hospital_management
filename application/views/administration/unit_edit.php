<form action="<?= base_url();?>unit_update/<?= $unit->unit_id; ?>" method="POST">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Update Unit info</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group row">
						<label class="control-label col-md-4">Unit Name</label>
						<div class="col-md-8">
							<input type="text" name="unit_name" required id="unit_name" data-required="1" placeholder="Unit name" value="<?= $unit->unit_name?>" class="form-control input-height" />
						</div>
					</div>

				</div>
				<div class="col-md-3">
					<button type="Submit"  class="btn btn-info m-r-20">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>	