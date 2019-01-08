<form action="<?= base_url()?>test_update/<?= $test->test_id ?>" method="POST" class="form-horizontal">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Edit Test INFORMATION</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="form-group row">
						<label class="control-label col-md-4">Test Name <span class="required">*</span> </label>
						<div class="col-md-8">
							<input type="text" id="test_name" name="test_name" value="<?= $test->test_name; ?>" required data-required="1" placeholder="Enter test name" class="form-control input-height" />
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Activation</label>
						<div class="col-md-8">
							<select class="form-control select2" name="test_activation" required data-placeholder="Select One">
								<option value="">Select...</option>
								<option value="A" <?= ($test->test_status == 'A')? 'selected':''?> >Active</option>
								<option value="U" <?= ($test->test_status == 'U')? 'selected':''?> >In-Active</option>
							</select>
						</div>
					</div>
					<div class="form-actions">

						<button type="submit" class="btn btn-info m-r-20 pull-right">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
