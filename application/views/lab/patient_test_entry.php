<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}


</style>
<form action="#" id="form_sample_1" class="form-horizontal">
	<div class="">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card card-topline-red">
					<div class="card-body ">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Test Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" value="T00001" readonly placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="admin" data-required="1" readonly placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
											<input class="form-control input-height" size="16"  placeholder="date of Birth" type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-9 col-sm-9">
				<div class="card card-topline-red">
					<div class="card-head">
						<header>Honorable Patient & Test Information</header>
					</div>
					<div class="card-body sale">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label class="control-label col-md-4">Patient Id </label>
									<div class="col-md-8">
										<select class="form-control  select2" data-placeholder="Select a Patient">
											<option value="">Select a Patient</option>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NM">New Mexico</option>
											<option value="ND">North Dakota</option>
											<option value="UT">Utah</option>
											<option value="WY">Wyoming</option>

										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Name</label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" readonly placeholder="Name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Mobile no.</label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" readonly placeholder="Mobile NO" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Address</label>
									<div class="col-md-8">
										<textarea name="address" placeholder="address" readonly class="form-control-textarea" rows="3" ></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="control-label col-md-3">Test ID</label>
									<div class="col-md-9">
										<select class="form-control  select2" data-placeholder="Select a Test">
											<option value="">Select a Test</option>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NM">New Mexico</option>
											<option value="ND">North Dakota</option>
											<option value="UT">Utah</option>
											<option value="WY">Wyoming</option>

										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Test Name </label>
									<div class="col-md-9">
										<input type="text" name="firstname" data-required="1"  placeholder="Test Name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3" >Quantity </label>
									<div class="col-md-3">
										<input type="number" name="firstname" data-required="1"  placeholder="Quantity" class="form-control input-height" />
									</div>
									<label class="control-label col-md-2">Rate </label>
									<div class="col-md-4" >
										<input type="number" name="firstname" data-required="1"  placeholder="Rate" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Discount <span >(%)</span> </label>
									<div class="col-md-8"  >
										<input type="number" name="firstname" data-required="1"  placeholder="Discount(%)" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Amount </label>
									<div class="col-md-9"  >
										<input type="number" name="firstname" data-required="1"  placeholder="Amount" class="form-control input-height" />
									</div>
								</div>
							</div>
						</div>
						<div class="offset-md-10 col-md-2">
							<button type="submit" class="btn btn-info btn-block">Add Cart</button>
						</div>
					</div>
				</div>
				<div class="card card-topline-aqua">
					<div class="card-body ">
						<div class="table-responsive">
							<table class="table table-bordered table table-hover full-width" >
								<thead>
								<tr class="">
									<th>#</th>
									<th>Category</th>
									<th>Test Name</th>
									<th>Qty</th>
									<th>Rate</th>
									<th>Discount</th>
									<th>Total Amount</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody id="Salescartlist"> </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 pharmacy" style=" padding-left: 0;">
				<div class="card card-topline-red">
					<div class="card-head">
						<header>Amount Details</header>
					</div>
					<div class="card-body" style="padding: 10px 10px 5px 10px;">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group ">
									<label class="control-label">Sub total</label>
									<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
								</div>
								<div class="form-group ">
									<label class="control-label col-md-12" style="text-align: left; padding-left: 0px;">Discount</label>
									<div class="col-md-5" style="padding-left: 0px; display: inline-block; float: left;">
										<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
									</div>

									<label class="control-label col-md-1" style="padding-left: 0px; display: inline-block; float: left; ">%</label>
									<div class="col-md-6" style="padding-left: 0px; display: inline-block; float: left;  padding-right: 0px;">
										<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
									</div>

								</div>
								<div class="form-group ">
									<label class="control-label">Round Off</label>
									<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
								</div>
								<div class="form-group ">
									<label class="control-label">Total</label>
									<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
								</div>
								<div class="form-group ">
									<label class="control-label">Paid</label>
									<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
								</div>
								<div class="form-group ">
									<label class="control-label">Previous Due (Buyer)</label>
									<input type="number" name="firstname" data-required="1" placeholder="0" value="0" class="form-control input-height" style="color: red;" />
								</div>
								<div class="form-group ">
									<label class="control-label">Due</label>
									<input type="number" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
								</div>

								<div class="form-actions">
									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-success m-r-20">Save</button>
											<button type="button" class="btn btn-info">New Test</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
