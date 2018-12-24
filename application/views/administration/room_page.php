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
									<label class="control-label col-md-4">Room Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="Room Id" value="R00001" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="Added By" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height" size="16" placeholder="Added Date" type="text" value="">
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
						<header>Room Or Bed INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Room Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" data-required="1" placeholder="Enter Room name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Attached Bathroom </label>
									<div class="col-md-8">
										<select class="form-control select2" name="gender">
											<option value="">Select...</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Attached AC </label>
									<div class="col-md-8">
										<select class="form-control select2" name="gender">
											<option value="">Select...</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Attached TV </label>
									<div class="col-md-8">
										<select class="form-control select2" name="gender">
											<option value="">Select...</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Room Or Bed Details <span class="required"> * </span> </label>
									<div class="col-md-8">
										<textarea name="summernote" class="form-control" rows="7" ></textarea>
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
					<header>Room Or bed List</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>
							<th style="width: 5%;">Room ID</th>
							<th style="width: 20%">Room Or Bed name</th>
							<th style="width: 5%">Bathroom</th>
							<th>AC</th>
							<th>TV</th>
							<th style="width: 30%">Room Details</th>
							<th style="width: 15%;"> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">
							<td>R0001</td>
							<td>Cabin 1- bed 1</td>
							<td style="text-align: center;"><span class="label label-sm label-success"> Yes </span></td>
							<td style="text-align: center;"><span class="label label-sm label-danger"> No </span></td>
							<td style="text-align: center;"><span class="label label-sm label-success"> Yes </span></td>
							<td>
								<details>
									<summary>Read full Details</summary>
									<p> - by Refsnes Data. All Rights Reserved.</p>
									<p>All content and graphics on this web site are the property of the company Refsnes Data.</p>
									<p>There is a new neighbor on Sesame Street. Her name is JuliaThere is a new neighbor on Sesame Street. Her name is JuliaThere is a new neighbor on Sesame Street. Her name is JuliaThere is a new neighbor on Sesame Street. Her name is Julia</p>
								</details>
							</td>
							<td>
								<a href="#" class="btn btn-success btn-xs">
									<i class="fa fa-user"></i>
								</a>
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
