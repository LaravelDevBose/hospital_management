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
									<label class="control-label col-md-4">Theater Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="T00001" data-required="1" placeholder="Theater Id" class="form-control input-height" />
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
									<label class="control-label col-md-4">Date <span class="required"> * </span> </label>
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
						<header>Operation Theater Entry</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">

								<div class="form-group row">
									<label class="control-label col-md-4">Theater name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Total Charge <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="number" name="firstname" data-required="1" placeholder="Total Charge" class="form-control input-height" />
									</div>
								</div>

								<div class="form-group row">
									<label class="control-label col-md-4">Status
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control input-height" name="gender">
											<option value="">Select...</option>
											<option value="Category 1">Active</option>
											<option value="Category 2">De-active</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Details
									</label>
									<div class="col-md-8">
										<textarea name="address" class="form-control-textarea" placeholder="Full Details " rows="4"></textarea>
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
					<header>Operation Theater List</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#ID</th>
							<th>Date</th>
							<th>Theater name</th>
							<th>Total Charge</th>
							<th>Details</th>
							<th>Status</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">

							<td>T0001</td>
							<td>10 jan 2018</td>
							<td>Arup bose</td>
							<td>15,000</td>
							<td>
								<details>
									<summary>Read full Details</summary>
									<p> - by Refsnes Data. All Rights Reserved.</p>
									<p>All content and graphics on this web site are the property of the company Refsnes Data.</p>
									<p>There is a new neighbor on Sesame Street. Her name is JuliaThere is a new neighbor on Sesame Street. Her name is JuliaThere is a new neighbor on Sesame Street. Her name is JuliaThere is a new neighbor on Sesame Street. Her name is Julia</p>
								</details>
							</td>
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
