<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
	.template .card-body{
		padding: 10px 5px 5px 5px;
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
									<label class="control-label col-md-5" style="padding-right: 5px">Test Id<span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" name="firstname" value="T00001" readonly data-required="1" placeholder="Doctor Id" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added By <span class="required">*</span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="admin" readonly data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height"  readonly size="16" placeholder="date of Birth" type="text" value="<?= date('d-m-Y   ')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-red template">
					<div class="card-head">
						<header>Insert Test Template info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-6">
								<div class="form-group row">
									<label class="control-label col-md-3">Test name: </label>
									<div class="col-md-9">
										<input type="text" name="firstname" data-required="1" placeholder="Test Name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Activation</label>
									<div class="col-md-8">
										<select class="form-control select2" >
											<option value="A">Active</option>
											<option value="D">De-Active</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<textarea name="summernote" id="summernote" cols="30" rows="30" style="height: 500px"></textarea>
							</div>
							<div class="offset-md-8 col-md-4">
								<button type="submit" class="btn btn-success btn-block btn-lg">Save Template</button>
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
					<header>List of Department</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#ID</th>
							<th>Creating Date</th>
							<th>Department Name</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="edit_patient.html" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="javascript().html" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="edit_patient.html" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="javascript().html" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="edit_patient.html" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="javascript().html" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="edit_patient.html" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="javascript().html" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="edit_patient.html" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="javascript().html" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
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
