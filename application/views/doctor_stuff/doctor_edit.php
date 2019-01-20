<form action="<?= base_url() ?>doctor_update/<?= $doctor->doc_id ?>" id="doctor_entry" class="form-horizontal" style="width: 800px;" method="post">
	
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Update Doctor INFORMATION</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group row">
						<label class="control-label col-md-4">Doctor Name <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" name="doc_name" id="doc_name" value="<?= $doctor->doc_name ?>" data-required="1" placeholder="Doctor name" class="form-control input-height" />
						</div>
					</div>
				
					<div class="form-group row">
						<label class="control-label col-md-4">Email </label>
						<div class="col-md-8">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
							<input type="text" class="form-control input-height" name="doc_email" value="<?= $doctor->doc_email ?>" id="doc_email" placeholder="Email Address"> </div>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Phone No <span class="required"> * </span></label>
						<div class="col-md-8">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-phone"></i>
								</span>
							<input type="text" class="form-control input-height" name="doc_phone" value="<?= $doctor->doc_phone ?>" placeholder="phone no"> </div>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Departments
							<span class="required"> * </span>
						</label>
						<div class="col-md-8">
							<select class="form-control input-height select2" required name="dept_id">
								<option value="">Select...</option>
								<?php if(isset($depts) && $depts): foreach($depts as $dept):?>
									<option value="<?= $dept->dept_id ?>" <?= ($doctor->dept_id == $dept->dept_id)?'selected':''?>><?= $dept->dept_name?></option>
								<?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Designation
							<span class="required"> * </span>
						</label>
						<div class="col-md-8">
							<select class="form-control input-height select2" required name="desg_id">
								<option value="">Select...</option>
								<?php if(isset($degis) && $degis): foreach($degis as $degi):?>
									<option value="<?= $degi->desg_id; ?>" <?= ($doctor->desg_id == $degi->desg_id)?'selected':''?>><?= $degi->desg_name ?></option>
								<?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Gender
							<span class="required"> * </span>
						</label>
						<div class="col-md-8">
							<select class="form-control input-height select2" required name="doc_gender">
								<option value="">Select...</option>
								<option value="Male" <?= ($doctor->doc_gender == 'Male')?'selected':''?>>Male</option>
								<option value="Female" <?= ($doctor->doc_gender == 'Female')?'selected':''?>>Female</option>
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
							<textarea name="doc_address" placeholder="address" class="form-control-textarea" rows="3" ><?= $doctor->doc_address ?></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Education </label>
						<div class="col-md-8">
							<textarea name="doc_edu" class="form-control-textarea" placeholder="Education" rows="3"><?= $doctor->doc_edu ?></textarea>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="offset-md-3 col-md-9">
								<button type="submit" id="doctor_submit" class="btn btn-info m-r-20">Submit</button>
								<button type="button" class="btn btn-default">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="<?= base_url()?>assets/plugin/select2/js/select2-init.js" ></script>