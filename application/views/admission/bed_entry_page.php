<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-box">
				<div class="card-head">
					<header>Add Room Allotment</header>

				</div>
				<div class="card-body" id="bar-parent">
					<form  class="form-horizontal">
						<div class="form-body">
							<div class="form-group row">
								<label class="control-label col-md-3">Room No
									<span class="required"> * </span>
								</label>
								<div class="col-md-5">
									<input type="text" name="roomno" data-required="1" placeholder="enter room number" class="form-control input-height" /> </div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3">Room Type
									<span class="required"> * </span>
								</label>
								<div class="col-md-5">
									<select class="form-control input-height" name="select">
										<option value="">Select...</option>
										<option value="Category 1">General Ward</option>
										<option value="Category 2">Delux</option>
										<option value="Category 3">Super Delux</option>
										<option value="Category 3">ICU</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3">Patient Name
									<span class="required"> * </span>
								</label>
								<div class="col-md-5">
									<input type="text" name="firstname" data-required="1" placeholder="enter patient name" class="form-control input-height" /> </div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3">Allotment Date
								</label>
								<div class="col-md-5">
									<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="form-control input-height" size="16" placeholder="date of appointment" type="text" value="">
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
									</div>
									<input type="hidden" id="dtp_input2" value="" />
								</div>
							</div>
							<div class="form-group row">
								<label class="control-label col-md-3">Discharge Date
								</label>
								<div class="col-md-5">
									<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="form-control input-height" size="16" placeholder="date of appointment" type="text" value="">
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
									</div>
									<input type="hidden" id="dtp_input5" value="" />
								</div>
							</div>
						</div>
						<div class="form-actions">
							<div class="row">
								<div class="offset-md-3 col-md-9">
									<button type="submit" class="btn btn-info m-r-20">Submit</button>
									<button type="button" class="btn btn-info">Cancel</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
