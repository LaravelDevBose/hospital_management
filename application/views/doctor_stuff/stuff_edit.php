<form action="<?= base_url() ?>stuff_update/<?= $stuff->stuff_id ?>" id="stuff_entry" class="form-horizontal" style="width: 800px;" method="POST">
	
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Update Stuff INFORMATION</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group row">
						<label class="control-label col-md-4">Stuff Name <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" name="stuff_name" id="stuff_name" value="<?= $stuff->stuff_name ?>" data-required="1" placeholder="Stuff name" class="form-control input-height" />
						</div>
					</div>
				
					<div class="form-group row">
						<label class="control-label col-md-4">Email </label>
						<div class="col-md-8">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
							<input type="text" class="form-control input-height" name="stuff_email" value="<?= $stuff->stuff_email ?>" id="stuff_email" placeholder="Email Address"> </div>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Phone No <span class="required"> * </span></label>
						<div class="col-md-8">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-phone"></i>
								</span>
							<input type="text" class="form-control input-height" name="stuff_phone" id="stuff_phone" value="<?= $stuff->stuff_phone ?>" placeholder="phone no"> </div>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Departments
							<span class="required"> * </span>
						</label>
						<div class="col-md-8">
							<select class="form-control input-height select2" required name="dept_id" id="dept_id">
								<option value="">Select...</option>
								<?php if(isset($depts) && $depts): foreach($depts as $dept):?>
									<option value="<?= $dept->dept_id ?>" <?= ($stuff->dept_id == $dept->dept_id)?'selected':''?>><?= $dept->dept_name?></option>
								<?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Designation
							<span class="required"> * </span>
						</label>
						<div class="col-md-8">
							<select class="form-control input-height select2" required name="desg_id" id="desg_id">
								<option value="">Select...</option>
								<?php if(isset($degis) && $degis): foreach($degis as $degi):?>
									<option value="<?= $degi->desg_id; ?>" <?= ($stuff->desg_id == $degi->desg_id)?'selected':''?>><?= $degi->desg_name ?></option>
								<?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Gender
							<span class="required"> * </span>
						</label>
						<div class="col-md-8">
							<select class="form-control input-height select2" required name="stuff_gender">
								<option value="">Select...</option>
								<option value="Male" <?= ($stuff->stuff_gender == 'Male')?'selected':''?>>Male</option>
								<option value="Female" <?= ($stuff->stuff_gender == 'Female')?'selected':''?>>Female</option>
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
							<textarea name="stuff_address" placeholder="address" class="form-control-textarea" rows="3" ><?= $stuff->stuff_address ?></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Education </label>
						<div class="col-md-8">
							<textarea name="stuff_edu" class="form-control-textarea" placeholder="Education" rows="3"><?= $stuff->stuff_edu ?></textarea>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="offset-md-3 col-md-9">
								<button type="submit" id="stuff_submit" class="btn btn-info m-r-20">Submit</button>
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