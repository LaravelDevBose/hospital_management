<form action="<?= base_url();?>category_update/<?= $category->cat_id;?>" method="POST">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Update Category info</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-9">
					<div class="form-group row">
						<label class="control-label col-md-4">Category Name <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" name="cat_name" value="<?= $category->cat_name ?>" id="cat_name" required data-required="1" placeholder="Category name" class="form-control input-height" />
						</div>
					</div>

				</div>
				<div class="col-md-3">
					<button type="submit"  class="btn btn-info m-r-20">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>