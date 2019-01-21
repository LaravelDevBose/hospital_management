<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="<?= base_url(); ?>admission_store" method="POST" id="admission_form" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-3">
								<div class="form-group row">
									<label class="control-label col-md-5" style="padding-left: 3px;">Admission Id<span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" value="<?= $admi_code; ?>"  data-required="1" placeholder="Admission Id" readonly class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group row">
									<label class="control-label col-md-5">Patient Id<span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" value="<?= $patient_code; ?>" data-required="1" placeholder="Patient id" readonly class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group row">
									<label class="control-label col-md-5">Created By <span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" name="firstname" data-required="1" placeholder="user name" readonly value="<?= $this->auth->username ?>" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group row">
									<label class="control-label col-md-3" style="padding-left: 3px;">Date <span class="required"> * </span> </label>
									<div class="col-md-9">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height" size="16" placeholder="date of Birth" type="text" value="<?= $this->date ?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-red">
					<div class="card-head">
						<header>PATIENT INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">First Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="first_name" id="first_name" required data-required="1" placeholder="First name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Last Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="last_name" id="last_name" required data-required="1" placeholder="Lirst name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Date Of Birth <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height" name="dob" id="dob" size="16" placeholder="Date of Birth" type="text" required value="">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Age <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="age" id="age" required data-required="1" placeholder="Age" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Gender
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control input-height" name="patient_gender" id="patient_gender" required>
											<option value="">Select...</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Blood Group <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="blood_group" id="blood_group"  data-required="1" placeholder="Blood Group" class="form-control input-height" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-aqua">
					<div class="card-head">
						<header>PERSONAL INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Father Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="father_name" id="father_name" data-required="1" placeholder="Father Name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Spouse Name </label>
									<div class="col-md-8">
										<input type="text" name="spounce_name" id="spounce_name" placeholder="Spouse Name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Religion</label>
									<div class="col-md-8">
										<input type="text" name="religion" id="religion" placeholder="Religion" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Address <span class="required"> * </span> </label>
									<div class="col-md-8">
										<textarea name="patient_address" id="patient_address" placeholder="Address" class="form-control-textarea" rows="4" ></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-aqua">
					<div class="card-head">
						<header>EMERGENCY CONTACT</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Full Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="emg_fullname" id="emg_fullname" required placeholder="First name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Relationship </label>
									<div class="col-md-8">
										<input type="text" name="emg_relation" id="emg_relation" placeholder="Relationship" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Phone No<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="emg_mobile" id="emg_mobile" required data-required="1" placeholder="Phone No" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Address <span class="required"> * </span> </label>
									<div class="col-md-8">
										<textarea name="emg_address" id="emg_address" required placeholder="Address" class="form-control-textarea" rows="4" ></textarea>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button type="submit" id="admission_submit" class="btn btn-info m-r-20">Submit</button>
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
