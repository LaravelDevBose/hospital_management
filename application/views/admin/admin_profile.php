<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: Arup-->
<!--* Date: 12/22/2018-->
<!--* Time: 12:56 PM-->
<!--*/-->

<style>
	.dropzone {
		min-height: 70px;
		padding: 10px 6px;
	}
</style>
<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="<?= base_url('admin_profile_update')?>" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
				<div class="card card-topline-aqua">
					<div class="card-head">
						<header>Admin Profile Update</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Email Address </label>
									<div class="col-md-8">
										<input type="email" name="email" placeholder="Email Address" value="<?= $profile->email?>" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Phone Num.</label>
									<div class="col-md-8">
										<input type="number" name="phone_num"  value="<?= $profile->phone_num; ?>" placeholder="Phone No" class="form-control input-height" />
									</div>
								</div>

							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Current Password <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="password" name="crnt_password" data-required="6" placeholder="Enter Current Password" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Avatar </label>
									<div class="col-md-8" id="bar-parent">
										<input  type="file" name="image" id="my-awesome-dropzone" class="dropzone" >
										<input type="hidden" name="old_avatar" value="<?= $profile->avatar?>">
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-5 col-md-7">
											<button type="submit" class="btn btn-info m-r-20">Update</button>
											<a href="<?= base_url('admin_profile')?>" class="btn btn-default">Reset</a>
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

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="<?= base_url('password_change')?>" method="POST" id="form_sample_1" class="form-horizontal">
				<div class="card card-topline-red">
					<div class="card-head">
						<header>Change Account Password</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Current Password <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="password" name="crnt_password" data-required="6" placeholder="Enter Current Password" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">New Password </label>
									<div class="col-md-8">
										<input type="password" name="password" placeholder="Enter New Password" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Confirm Password </label>
									<div class="col-md-8">
										<input type="password" name="confirm_password"  placeholder="Enter Confirm Password" class="form-control input-height" />
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-5 col-md-7">
											<button type="submit" class="btn btn-info m-r-20">Change</button>
											<a href="<?= base_url('admin_profile')?>" class="btn btn-default">Reset</a>
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
