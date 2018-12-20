
<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<form action="" id="sale_record_search">
						<div class="row">
							<div class="col-md-11">
								<div class="col-md-2" style="float: left; padding-right: 0px; padding-left: 0px;">
									<div class="form-group ">
										<label class="control-label">Search Type</label>
										<select class="form-control select2" id="search_type" data-placeholder="Select a Option" >
											<option value="">Select a Option</option>
											<option value="patient">By Patient</option>
											<option value="test">By Test Name</option>
											<option value="date">By Date</option>
										</select>
									</div>
								</div>
								<div class="col-md-3" style="float: left;">
									<div class="form-group " >
										<label class="control-label">Patient Name</label>
										<select class="form-control  select2" id="cus_id" data-placeholder="Select a Customer">
											<option value="">Select a Category</option>
											<option value="AK">Customer 5</option>
											<option value="AK">Customer 4</option>
											<option value="AK">Customer 3</option>
											<option value="AK">Customer 2</option>
											<option value="AK">Customer 1</option>
										</select>
									</div>
								</div>
								<div class="col-md-3" style="float: left;">
									<div class="form-group " >
										<label class="control-label">Test Name</label>
										<select class="form-control  select2" id="cus_id" data-placeholder="Select a Customer">
											<option value="">Select a Category</option>
											<option value="AK">Customer 5</option>
											<option value="AK">Customer 4</option>
											<option value="AK">Customer 3</option>
											<option value="AK">Customer 2</option>
											<option value="AK">Customer 1</option>
										</select>
									</div>
								</div>

								<div class="col-md-2" style="float: left;">
									<div class="form-group ">
										<label class="control-label">From Date</label>
										<div class="input-group date form_date " data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
											<input class="form-control input-height" size="16"  placeholder="Sales date" type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
								<div class="col-md-2" style="float: left;">
									<div class="form-group ">
										<label class="control-label">To Date </label>
										<div class="input-group date form_date " data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
											<input class="form-control input-height" size="16"  placeholder="Sales date" type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-1">
								<div class="form-group row" style="margin-top: 25px;">
									<button type="button" id="search_btn" class="btn btn-info btn-block">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card card-topline-aqua">
				<div class="card-head">
					<header>List of Test Report</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#</th>
							<th>Report ID</th>
							<th>Delivery Date</th>
							<th>Patient Name</th>
							<th>Test Name</th>
							<th>Status</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">
							<td>01</td>
							<td>R0001</td>
							<td>10 jan 2018</td>
							<td>Arup Bose</td>
							<td>Neurology</td>
							<td><span class="label label-sm label-success"> Approved </span></td>
							<td>
								<a href="#" class="btn btn-success btn-xs">
									<i class="fa fa-print"></i>
								</a>
								<a href="#" class="btn btn-info btn-xs">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-truck"></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>01</td>
							<td>R0001</td>
							<td>10 jan 2018</td>
							<td>Arup Bose</td>
							<td>Neurology</td>
							<td><span class="label label-sm label-success"> Approved </span></td>
							<td>
								<a href="#" class="btn btn-success btn-xs">
									<i class="fa fa-print"></i>
								</a>
								<a href="#" class="btn btn-info btn-xs">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-truck"></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>01</td>
							<td>R0001</td>
							<td>10 jan 2018</td>
							<td>Arup Bose</td>
							<td>Neurology</td>
							<td><span class="label label-sm label-success"> Approved </span></td>
							<td>
								<a href="#" class="btn btn-success btn-xs">
									<i class="fa fa-print"></i>
								</a>
								<a href="#" class="btn btn-info btn-xs">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-truck"></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>01</td>
							<td>R0001</td>
							<td>10 jan 2018</td>
							<td>Arup Bose</td>
							<td>Neurology</td>
							<td><span class="label label-sm label-success"> Approved </span></td>
							<td>
								<a href="#" class="btn btn-success btn-xs">
									<i class="fa fa-print"></i>
								</a>
								<a href="#" class="btn btn-info btn-xs">
									<i class="fa fa-eye"></i>
								</a>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-truck"></i>
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
