<form  action="<?= base_url()?>salary_month_update/<?= $month->slm_id?>" method="POST" class="form-horizontal" style="width: 420px">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Edit Salary Month info</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="form-group row">
						<label class="control-label col-md-4" style="padding-right: 10px">Month Name <span class="text text-danger">*</span></label>
						<div class="col-md-8">
							<select class="form-control select2" required id="e_month_name" name="month_name" >
								<option value="0">Select a Month Name</option>
								<option value="January" <?= ($month->month_name == 'January')?'selected':''?> >January</option>
								<option value="February" <?= ($month->month_name == 'February')?'selected':''?> >February</option>
								<option value="March" <?= ($month->month_name == 'March')?'selected':''?> >March</option>
								<option value="April" <?= ($month->month_name == 'April')?'selected':''?> >April</option>
								<option value="May" <?= ($month->month_name == 'May')?'selected':''?> >May</option>
								<option value="June" <?= ($month->month_name == 'June')?'selected':''?> >June</option>
								<option value="July" <?= ($month->month_name == 'July')?'selected':''?> >July</option>
								<option value="August" <?= ($month->month_name == 'August')?'selected':''?> >August</option>
								<option value="September" <?= ($month->month_name == 'September')?'selected':''?> >September</option>
								<option value="October" <?= ($month->month_name == 'October')?'selected':''?> >October</option>
								<option value="November" <?= ($month->month_name == 'November')?'selected':''?> >November</option>
								<option value="December" <?= ($month->month_name == 'December')?'selected':''?> >December</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-4">Year  </label>
						<div class="col-md-8">
							<input type="text" id="e_year" name="year" required  data-required="1" value="<?= $month->year; ?>" class="form-control input-height" />
						</div>
					</div>


					<button type="submit" id="month_update" class="btn btn-info m-r-20 pull-right">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?= base_url()?>assets/plugin/select2/js/select2-init.js" ></script>
<?php $this->load->view('ajax/salary_month_ajax');?>
