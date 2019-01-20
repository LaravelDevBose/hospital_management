<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="#" id="doctor_entry" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Doctor Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="<?= $code; ?>" data-required="1" placeholder="Doctor Id" readonly class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Created By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="<?= $this->auth->username; ?>" data-required="1" readonly placeholder="username" class="form-control input-height" />
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-red">
					<div class="card-head">
						<header>Doctor INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Doctor Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="doc_name" id="doc_name" data-required="1" placeholder="Doctor name" class="form-control input-height" />
									</div>
								</div>
							
								<div class="form-group row">
									<label class="control-label col-md-4">Email </label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
										<input type="text" class="form-control input-height" name="doc_email" id="doc_email" placeholder="Email Address"> </div>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Phone No <span class="required"> * </span></label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-phone"></i>
											</span>
										<input type="text" class="form-control input-height" name="doc_phone" placeholder="phone no"> </div>
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
												<option value="<?= $dept->dept_id ?>"><?= $dept->dept_name?></option>
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
												<option value="<?= $degi->desg_id; ?>"><?= $degi->desg_name ?></option>
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
										<textarea name="doc_address" placeholder="address" class="form-control-textarea" rows="3" ></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Education </label>
									<div class="col-md-8">
										<textarea name="doc_edu" class="form-control-textarea" placeholder="Education" rows="3"></textarea>
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
		</div>
		<div class="col-md-12">
			<div class="card card-topline-red">
				<div class="card-head">
					<header>Doctor List</header>
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
							<?php if(isset($doctors) && $doctors): foreach($doctors as $doctor): ?>
								<tr class="odd gradeX">
									<td class="patient-img"><?= $doctor->doc_code?> </td>
									<td><?= $doctor->doc_name; ?></td>
									<td class="left"><?= $doctor->dept_name ?></td>
									<td class="left"><?= $doctor->desg_name ?></td>
									<td><a href="tel:<?= $doctor->doc_phone ?>"><?= $doctor->doc_phone ?></a></td>
									<td><a href="mailto:<?= $doctor->doc_email ?>"><?= $doctor->doc_email ?> </a></td>
									<td class="left"><?= $doctor->doc_gender ?></td>
									<td class="left">
										<details>
											<summary>View Address</summary>
											<p><?= $doctor->doc_address ?></p>
										</details>
									</td>
									<td class="left">
										<details>
											<summary>View Education</summary>
											<p><?= $doctor->doc_edu ?></p>
										</details>
									</td>
									<td>
										<a data-src="<?= base_url()?>doctor_edit/<?= $doctor->doc_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url()?>doctor_delete/<?= $doctor->doc_id?>" onclick="return confirm('Are You Sure..??');" class="btn btn-danger btn-xs">
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

<?php $this->load->view('ajax/doctor'); ?>