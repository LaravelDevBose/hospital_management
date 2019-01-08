<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form  id="test_store_form" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Test Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" readonly value="<?= $test_id ?>" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added By <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" readonly value="<?= $this->auth->username; ?>" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height" size="16"  type="text" value="<?= $this->date?>">
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
						<header>Test INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Test Name <span class="required">*</span> </label>
									<div class="col-md-7">
										<input type="text" id="test_name" name="test_name" data-required="1" placeholder="Enter test name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group row">
									<label class="control-label col-md-5">Activation</label>
									<div class="col-md-7">
										<select class="form-control select2" name="test_activation" data-placeholder="Select One">
											<option value="">Select...</option>
											<option value="A">Active</option>
											<option value="U">In-Active</option>
										</select>
									</div>
								</div>

							</div>
							<div class="col-md-3">
								<button type="button" id="test_submit" class="btn btn-info m-r-20">Submit</button>
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
					<header>Test Information List</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>
							<th style="width: 5%;">#</th>
							<th >Test ID</th>
							<th >Test name</th>
							<th >Activation</th>
							<th > Actions </th>
						</tr>
						</thead>
						<tbody id="tbody">
						<?php $i=1; if(isset($tests) && $tests): foreach($tests as $test):?>
							<tr class="odd gradeX">
								<td><?= $i++ ?></td>
								<td><?= $test->test_code; ?></td>
								<td><?= ucwords($test->test_name)?></td>
								<td style="text-align: center;">
									<?php if($test->test_activation == 'A'):?>
										<span class="label label-sm label-success"> Active </span>
									<?php else:?>
										<span class="label label-sm label-danger"> In-Active </span>
									<?php endif; ?>
								</td>

								<td>
									<a data-src="<?= base_url()?>test_edit/<?= $test->test_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs" >
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?= base_url()?>test_delete/<?= $test->test_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure..?');">
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

<?php $this->load->view('ajax/test_ajax');?>
