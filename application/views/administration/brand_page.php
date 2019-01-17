<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="#" id="brand_form" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-5" style="padding-right: 5px">Brand Id<span class="required"> * </span> </label>
									<div class="col-md-7">
										<input type="text" name="firstname" value="<?= $brand_code?>" data-required="1" placeholder="Brand Id" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added By <span class="required">*</span> </label>
									<div class="col-md-8">
										<input type="text" name="firstname" value="<?= $this->auth->username; ?>" data-required="1" placeholder="enter first name" class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Added Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height"  size="16" placeholder="date of Birth" type="text" value="<?= date('d-m-Y')?>">
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
						<header>Insert Brand info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-7">
								<div class="form-group row">
									<label class="control-label col-md-4">Brand Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" name="brand_name" required id="brand_name" data-required="1" placeholder="Brand name" class="form-control input-height" />
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<button type="submit" id="brand_submit" class="btn btn-info m-r-20">Submit</button>
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
					<header>List of Brand</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#</th>
							<th>Creating Date</th>
							<th>Brand ID</th>
							<th>Brand Name</th>
							<th> Actions </th>
						</tr>
						</thead>
						<tbody id="tbody">
							<?php $i=1; if(isset($brands) && $brands): foreach($brands as $brand):?>
								<tr class="odd gradeX">

									<td><?= $i++; ?></td>
									<td><?php $date = new DateTime($brand->created_at); echo date_format($date, 'd M Y');?></td>
									<td><?= $brand->brand_code; ?></td>
									<td><?= $brand->brand_name; ?></td>
									<td>
										<a data-src="<?= base_url()?>brand_edit/<?= $brand->brand_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url()?>brand_delete/<?= $brand->brand_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
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


<?php $this->load->view('ajax/brand_ajax');?>