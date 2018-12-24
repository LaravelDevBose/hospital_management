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
									<label class="control-label col-md-5" style="padding-right: 5px">Category Id<span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" name="firstname" value="C00001" data-required="1" placeholder="Category Id" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added By <span class="required">*</span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="admin" data-required="1" placeholder="Added By" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height"  size="16" placeholder="Added Time" type="text" value="<?= date('d-m-Y   ')?>">
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
						<header>Insert Category info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-7">
								<div class="form-group row">
									<label class="control-label col-md-4">Category Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="Category name" class="form-control input-height" />
									</div>
								</div>

							</div>
							<div class="col-md-4">
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
					<header>List of Category</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#ID</th>
							<th>Creating Date</th>
							<th>Category Name</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="#" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="#" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="#" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="#" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="#" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o "></i>
								</a>
							</td>
						</tr>
						<tr class="odd gradeX">

							<td>D0001</td>
							<td>10 jan 2018</td>
							<td>Neurology</td>
							<td>
								<a href="#" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="#" class="btn btn-danger btn-xs">
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
