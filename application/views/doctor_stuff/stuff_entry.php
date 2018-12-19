<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="#" id="form_sample_1" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Stuff Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="S00001" data-required="1" placeholder="Doctor Id" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Created By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="admin" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height"  size="16" placeholder="date of Birth" type="text" value="<?= date('d-m-Y   ')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
										<input type="hidden" id="dtp_input2" value="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-red">
					<div class="card-head">
						<header>Stuff INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">First Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Last Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Email </label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
											<input type="text" class="form-control input-height" name="email" placeholder="Email Address"> </div>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Phone No <span class="required"> * </span></label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-phone"></i>
											</span>
											<input type="text" class="form-control input-height" name="email" placeholder="phone no"> </div>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Designation
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<input type="text" name="designation" data-required="1" placeholder="enter your designation" class="form-control input-height" /> </div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Departments
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control input-height" name="department">
											<option value="">Select...</option>
											<option value="Category 1">Neurology</option>
											<option value="Category 2">Orthopedics</option>
											<option value="Category 3">Gynaecology</option>
											<option value="Category 3">Microbiology</option>
											<option value="Category 3">Radiotherapy</option>
											<option value="Category 3">Pharmacy</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Gender
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control input-height" name="gender">
											<option value="">Select...</option>
											<option value="Category 1">Male</option>
											<option value="Category 2">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">

								<div class="form-group row">
									<label class="control-label col-md-4">Address
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<textarea name="address" placeholder="address" class="form-control-textarea" rows="3" ></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Profile Picture
									</label>
									<div class="compose-editor">
										<input type="file" class="default" multiple>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Education
									</label>
									<div class="col-md-8">
										<textarea name="address" class="form-control-textarea" placeholder="Education" rows="3"></textarea>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button type="submit" class="btn btn-info m-r-20">Submit</button>
											<button type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
