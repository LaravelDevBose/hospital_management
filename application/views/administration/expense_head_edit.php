
<form action="<?= base_url()?>expense_head_update/<?= $head->eh_id?>" method="POST" class="form-horizontal" style="width: 500px">
	<div class="card card-topline-red">
	<div class="card-head">
		<header>Edit Expense head</header>
	</div>
	<div class="card-body ">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group row">
					<label class="control-label col-md-5">Expense Head Title<span class="required"> * </span> </label>
					<div class="col-md-7">
						<input type="text" name="eh_name" value="<?= $head->eh_name ?>" required data-required="1" placeholder="Expense Head Title" class="form-control input-height" />
					</div>
				</div>
				<button type="submit"  class="btn btn-info m-r-20 pull-right">Submit</button>
			</div>
		</div>
	</div>
</div>
</form>
