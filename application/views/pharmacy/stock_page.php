<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-topline-aqua">
				<div class="card-body ">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group row">
								<label class="control-label col-md-4" style="text-align: right;">Select Type</label>
								<div class="col-md-8">
									<select class="form-control  select2" data-placeholder="Select a Option" onchange="search_type_toggle($(this).val());">
										<option value="">Select a Option</option>
										<option value="TS">Total stock</option>
										<option value="CS">Current Stock</option>
										<option value="CW">Category Wise</option>
										<option value="BW">Brand wise</option>
										<option value="PW">Product Wise</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4" id="cat_view" style="display: none;">
							<div class="form-group row" >
								<label class="control-label col-md-3">Category</label>
								<div class="col-md-9">
									<select class="form-control  select2" data-placeholder="Select a Category">
										<option value="">Select a Category</option>
										<option value="AK">Category 5</option>
										<option value="AK">Category 4</option>
										<option value="AK">Category 3</option>
										<option value="AK">Category 2</option>
										<option value="AK">Category 1</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4" id="brand_view" style="display: none;">
							<div class="form-group row" >
								<label class="control-label col-md-3">Brand</label>
								<div class="col-md-9">
									<select class="form-control  select2" data-placeholder="Select a Brand">
										<option value="">Select a Brand</option>
										<option value="AK">Brand 5</option>
										<option value="AK">Brand 4</option>
										<option value="AK">Brand 3</option>
										<option value="AK">Brand 2</option>
										<option value="AK">Brand 1</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4" id="product_view" style="display: none">
							<div class="form-group row" >
								<label class="control-label col-md-3">Product</label>
								<div class="col-md-9">
									<select class="form-control  select2" data-placeholder="Select a Product">
										<option value="">Select a Product</option>
										<option value="AK">Product 5</option>
										<option value="AK">Product 4</option>
										<option value="AK">Product 3</option>
										<option value="AK">Product 2</option>
										<option value="AK">Product 1</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-md-2">
							<div class="form-group row">
								<button type="submit" class="btn btn-info btn-block">Search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function search_type_toggle(type) {

		alert(type);
		$('#cat_view').hide();
		$('#brand_view').hide();
		$('#product_view').hide();

		if(type == 'CW'){
			$('#cat_view').show();
		}else if(type == 'BW'){
			$('#brand_view').show();
		}else if(type == 'PW'){
			$('#product_view').show();
		}else{
			return;
		}
	}
</script>
