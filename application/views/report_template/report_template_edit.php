<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
	.template .card-body{
		padding: 10px 5px 5px 5px;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form action="<?= base_url()?>test_template_update/<?= $template->temp_id?>" method="POST" class="form-horizontal">
				<div class="card card-topline-red">
					<div class="card-body ">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Test Name <span class="text text-danger">*</span> </label>
									<div class="col-md-8">
										<select class="form-control select2" name="test_id" data-placeholder="Select A Test">
											<option value="">Select...</option>
											<option value="1">Yes</option>
											<option value="2">No</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Updated By <span class="required">*</span> </label>
									<div class="col-md-8">
										<input type="text"  value="<?= $this->auth->username?>" readonly  class="form-control input-height" />
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4" style="padding-right: 5px">Updated Date <span class="required"> * </span> </label>
									<div class="col-md-8">
										<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
											<input class="form-control input-height"  readonly  type="text" value="<?= date('d-m-Y')?>">
											<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card card-topline-red template">
					<div class="card-head">
						<header>Insert Test Template info</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<textarea name="template" id="summernote" cols="30" rows="30" style="height: 500px"><?= $template->template ?></textarea>
							</div>
							<div class="offset-md-8 col-md-4">
								<button type="submit" class="btn btn-success btn-block btn-lg">Save Template</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
