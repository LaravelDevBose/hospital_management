<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>
<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form  id="dept_form" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-5" style="padding-right: 5px">Department Id<span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" readonly value="<?= $dept_code?>"class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added By <span class="required">*</span> </label>
									<div class="col-md-8">
										<input type="text" value="<?= $this->auth->username?>" readonly class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height" type="text" value="<?= date('d-m-Y')?>">
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
						<header>Insert Department info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-7">
								<div class="form-group row">
									<label class="control-label col-md-4">Department Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="dept_name" id="dept_name" data-required="1" placeholder="Department name" class="form-control input-height" />
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<button type="button" id="dept_submit" class="btn btn-info m-r-20">Submit</button>
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

							<th>#</th>
							<th>Department Code</th>
							<th>Department Name</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody id="tbody">
						<?php $i=1; if(isset($departments) && $departments): foreach($departments as $department):?>
							<tr class="odd gradeX">
								<td><?= $i++ ?></td>
								<td><?= $department->dept_code ?></td>
								<td><?= $department->dept_name; ?></td>
								<td>
									<a data-src="<?= base_url()?>department_edit/<?= $department->dept_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs ">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?= base_url()?>department_delete/<?= $department->dept_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
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


<?php $this->load->view('ajax/dept_ajax');?>
