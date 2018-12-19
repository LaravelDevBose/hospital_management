<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
	.card-body{
		padding-left: 10px;
		padding-right: 5px;
	}
	.sale .col-md-9, .sale .col-md-8{
		padding-left: 0px;
		padding-right: 0px;
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
									<label class="control-label col-md-4">Sale Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" value="S00001" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Sale By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="admin" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Sale Date <span class="required"> * </span> </label>
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
						<header>Honorable Buyer & Product Information</header>
					</div>
					<div class="card-body sale">
						<div class="row">
							<div class="col-md-4 ">
								<div class="form-group row">
									<label class="control-label col-md-4">Buyer Id </label>
									<div class="col-md-8">
										<select class="form-control  select2">
											<option value="">Select a state</option>
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
										<input type="text" name="firstname" data-required="1" readonly placeholder="enter first name" class="form-control input-height" />
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
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-3">Pro. ID</label>
									<div class="col-md-9">
										<select class="form-control  select2">
											<option value="">Select a state</option>
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
									<label class="control-label col-md-3">P.Name </label>
									<div class="col-md-9">
										<input type="text" name="firstname" data-required="1"  placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3" >Quantity </label>
									<div class="col-md-3" style="padding-right: 0; padding-left: 0;">
										<input type="number" name="firstname" data-required="1"  placeholder="Quantity" class="form-control input-height" />
									</div>
									<label class="control-label col-md-3" style="padding-right: 10px; padding-left: 0;">Sale Rate </label>
									<div class="col-md-3" style="padding-right: 0; padding-left: 0;">
										<input type="number" name="firstname" data-required="1"  placeholder="Sale Rate" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Discount <span >(%)</span> </label>
									<div class="col-md-8"  style="padding-right: 0px; padding-left: 0px;">
										<input type="number" name="firstname" data-required="1"  placeholder="Discount(%)" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Amount </label>
									<div class="col-md-9"  style="padding-right: 0px; padding-left: 0px;">
										<input type="number" name="firstname" data-required="1"  placeholder="Amount" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card" style="height: 100px;">
									<div class="panel-body">
									</div>
									<span class="panel-footer label label-aqua" style="margin-top: 25%;">Stock Quantity</span>
								</div>
							</div>
						</div>
						<div class="offset-md-7 col-md-2">
							<button type="submit" class="btn btn-info btn-block">Submit</button>
						</div>
					</div>
				</div>
				<div class="card card-topline-aqua">
					<div class="card-head">
						<header>PERSONAL INFORMATION</header>
					</div>
					<div class="card-body ">
						
					</div>
				</div>
			</div>
			<div class="col-md-3 pharmacy" style=" padding-left: 0;">
				<div class="card card-topline-red">
					<div class="card-head">
						<header>PATIENT INFORMATION</header>
					</div>
					<div class="card-body" style="padding: 10px 10px 5px 10px;">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group ">
									<label class="control-label">First Name <span class="required"> * </span> </label>
									<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
								</div>
								<div class="form-group ">
									<label class="control-label">Last Name <span class="required"> * </span> </label>
									<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
