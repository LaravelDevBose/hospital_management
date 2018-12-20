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
									<label class="control-label col-md-4">Expense Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="P00001" data-required="1" placeholder="Doctor Id" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added By <span class="required">*</span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="admin" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added Date <span class="required"> * </span> </label>
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
						<header>Expense Entry</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px;">Expense Head
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control select2" name="department">
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
									<label class="control-label col-md-4">Amount <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="number" name="firstname" data-required="1" placeholder="amount" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Description <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter expense description" class="form-control input-height" />
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


<div class="" style="margin-top: 10px;">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-topline-aqua">
				<div class="card-head">
					<header>Expense List</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#ID</th>
							<th>Date</th>
							<th>Expense head</th>
							<th>description</th>
							<th>Amount</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">

							<td>E0001</td>
							<td>10 jan 2018</td>
							<td>Current Bill</td>
							<td>paid current bill </td>
							<td>15,000</td>
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
