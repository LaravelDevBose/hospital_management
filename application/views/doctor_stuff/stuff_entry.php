<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="#" id="stuff_form" class="form-horizontal">
				<div class="card card-topline-red">
					<div class="card-body ">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Stuff Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" readonly value="<?= $code?>" data-required="1" placeholder="" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Created By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" readonly value="<?= $this->auth->username ?>" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height"  size="16" placeholder="date of Birth" type="text" value="<?= date('d-m-Y')?>">
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
									<label class="control-label col-md-4">Last Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="stuff_name" id="stuff_name" data-required="1" placeholder="Stuff name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Email </label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
											<input type="text" class="form-control input-height" name="stuff_email" placeholder="Email Address"> </div>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Phone No <span class="required"> * </span></label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-phone"></i>
											</span>
											<input type="text" class="form-control input-height" name="stuff_phone" id="stuff_phone" placeholder="phone no"> </div>
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
												<option value="<?= $degi->desg_id; ?>"><?= $degi->desg_name ?></option>
											<?php endforeach; endif; ?>
										</select>
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
												<option value="<?= $dept->dept_id ?>"><?= $dept->dept_name?></option>
											<?php endforeach; endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Gender
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control input-height select2" required name="stuff_gender" id="stuff_gender">
											<option value="">Select...</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
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
										<textarea name="stuff_address" id="stuff_address" placeholder="address" class="form-control-textarea" rows="3" ></textarea>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="control-label col-md-4">Education
									</label>
									<div class="col-md-8">
										<textarea name="stuff_edu" id="stuff_edu" class="form-control-textarea" placeholder="Education" rows="3"></textarea>
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
		</div>
		<div class="col-md-12">
			<div class="card card-topline-red">
				<div class="card-head">
					<header>Stuff List</header>
				</div>
				<div class="card-body ">
					<div class="table-scrollable">
						<table class="table table-hover table-checkable order-column full-width" id="example4">
							<thead>
							<tr>
								<th># ID</th>
								<th> Name </th>
								<th> Department </th>
								<th> Designation </th>
								<th> Mobile </th>
								<th> Email </th>
								<th> Gender </th>
								<th> Address </th>
								<th> Education </th>
								<th> Action </th>
							</tr>
							</thead>
							<tbody id="tbody">
							<?php if(isset($stuffs) && $stuffs): foreach($stuffs as $stuff): ?>
								<tr class="odd gradeX">
									<td class="patient-img"><?= $stuff->stuff_code?> </td>
									<td><?= $stuff->stuff_name; ?></td>
									<td class="left"><?= $stuff->dept_name ?></td>
									<td class="left"><?= $stuff->desg_name ?></td>
									<td><a href="tel:<?= $stuff->stuff_phone ?>"><?= $stuff->stuff_phone ?></a></td>
									<td><a href="mailto:<?= $stuff->stuff_email ?>"><?= $stuff->stuff_email ?> </a></td>
									<td class="left"><?= $stuff->stuff_gender ?></td>
									<td class="left">
										<details>
											<summary>View Address</summary>
											<p><?= $stuff->stuff_address ?></p>
										</details>
									</td>
									<td class="left">
										<details>
											<summary>View Education</summary>
											<p><?= $stuff->stuff_edu ?></p>
										</details>
									</td>
									<td>
										<a data-src="<?= base_url()?>stuff_edit/<?= $stuff->stuff_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url()?>stuff_delete/<?= $stuff->stuff_id?>" onclick="return confirm('Are You Sure..??');" class="btn btn-danger btn-xs">
											<i class="fa fa-trash-o "></i>
										</a>
									</td>
								</tr>
							<?php endforeach; endif; ?>
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php $this->load->view('ajax/stuff'); ?>