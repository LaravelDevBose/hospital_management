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
					<div class="card-head">
						<header>Insert Salary Month info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Month Name </label>
									<div class="col-md-8">
										<select class="form-control select2" >
											<option value="0">Select a Month Name</option>
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12" selected="">December</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Year  </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" value="<?= date('Y'); ?>" class="form-control input-height" />
									</div>
								</div>

							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-info m-r-20">Submit</button>
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
					<header>List of Salary Month</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#</th>
							<th>Month</th>
							<th>Year</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>1</td>
								<td>January</td>
								<td>2019</td>
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
