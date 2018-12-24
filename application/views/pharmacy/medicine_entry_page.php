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
									<label class="control-label col-md-4">Product Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Created By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height" size="16" placeholder="date of Birth" type="text" value="">
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
						<header>Medicine INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Product Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="Enter product name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Genetic Name<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="Enter genetic name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Category
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control select2" name="gender">
											<option value="">Select...</option>
											<option value="Category 1">Male</option>
											<option value="Category 2">Female</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Brand
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control select2" name="gender">
											<option value="">Select...</option>
											<option value="Category 1">Male</option>
											<option value="Category 2">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Re-Order Level <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Purchase Rate<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Sale Rate<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="0" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Unit
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control select2" name="gender">
											<option value="">Select...</option>
											<option value="Category 1">Male</option>
											<option value="Category 2">Female</option>
										</select>
									</div>
								</div>

								<div class="form-actions">
									<div class="row">
										<div class="offset-md-6 col-md-6">
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

<div class="" style="margin-top: 10px;">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-topline-aqua">
				<div class="card-head">
					<header>medicine List</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#ID</th>
							<th>Full name</th>
							<th>Emg. Person Name</th>
							<th>Phone No</th>
							<th>Blood Group</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Status</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">

							<td>P0001</td>
							<td> shuxer</td>
							<td>Arup</td>
							<td>0124587965</td>
							<td>O+</td>
							<td>32</td>
							<td>Male</td>
							<td><span class="label label-sm label-success"> Approved </span></td>
							<td>
								<a href="edit_patient.html" class="btn btn-success btn-xs">
									<i class="fa fa-user"></i>
								</a>
								<a href="edit_patient.html" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="javascript().html" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
