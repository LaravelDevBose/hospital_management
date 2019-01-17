<form action="<?= base_url()?>brand_update/<?= $brand->brand_id?>" method="POST">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Update Brand info</header>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-9">
					<div class="form-group row">
						<label class="control-label col-md-4" style="padding-right: 2px;">Brand Name <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" name="brand_name" required id="brand_name" data-required="1" placeholder="Brand name" value="<?= $brand->brand_name; ?>" class="form-control input-height" />
						</div>
					</div>

				</div>
				<div class="col-md-3">
					<button type="submit" class="btn btn-info m-r-20">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>