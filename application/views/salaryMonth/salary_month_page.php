<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form  id="salary_month_store" class="form-horizontal">
				<div class="card card-topline-red">
					<div class="card-head">
						<header>Insert Salary Month info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Month Name <span class="text text-danger">*</span></label>
									<div class="col-md-8">
										<select class="form-control select2" id="month_name" name="month_name" >
											<option value="0">Select a Month Name</option>
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
											<option value="June">June</option>
											<option value="July">July</option>
											<option value="August">August</option>
											<option value="September">September</option>
											<option value="October">October</option>
											<option value="November">November</option>
											<option value="December">December</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Year  </label>
									<div class="col-md-8">
										<input type="text" id="year" name="year" data-required="1" value="<?= date('Y'); ?>" class="form-control input-height" />
									</div>
								</div>

							</div>
							<div class="col-md-2">
								<button type="button" id="month_submit" class="btn btn-info m-r-20">Submit</button>
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

							<th style="width: 3%">#</th>
							<th>Month</th>
							<th>Year</th>
							<th>View As</th>
							<th style="width: 10%"> Actions </th>
						</tr>
						</thead>
						<tbody id="tbody">
						<?php $i = 1; if(isset($months) && $months): foreach($months as $month):?>
							<tr class="odd gradeX">
								<td><?= $i++ ?></td>
								<td><?= $month->month_name; ?></td>
								<td><?= $month->year; ?></td>
								<td><?= $month->month_name.'-'.$month->year; ?></td>
								<td>
									<a data-src="<?= base_url()?>salary_month_edit/<?= $month->slm_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?= base_url()?>salary_month_delete/<?= $month->slm_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
										<i class="fa fa-trash-o "></i>
									</a>
								</td>
							</tr>
						<?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('ajax/salary_month_ajax');?>
