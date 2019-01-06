<form  action="<?= base_url()?>room_update/<?= $room->room_id?>" method="POST" class="form-horizontal">
	<div class="card card-topline-red" style="width: 450px">
		<div class="card-head">
			<header>Room Or Bed INFORMATION</header>
		</div>
		<div class="card-body ">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group row">
						<label class="control-label col-md-4">Room Name <span class="required"> * </span> </label>
						<div class="col-md-8">
							<input type="text" id="room_name" name="room_name" value="<?= $room->room_name ?>" data-required="1" placeholder="Enter Room name" class="form-control input-height" />
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Attached Bathroom </label>
						<div class="col-md-8">
							<select class="form-control select2" name="bathroom" data-placeholder="Select One">
								<option value="">Select...</option>
								<option value="Yes" <?= ($room->bathroom == 'Yes')?'selected':''?> >Yes</option>
								<option value="No"  <?= ($room->bathroom == 'No')?'selected':''?>>No</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Attached AC </label>
						<div class="col-md-8">
							<select class="form-control select2" name="ac" data-placeholder="Select One">
								<option value="">Select...</option>
								<option value="Yes"  <?= ($room->ac == 'Yes')?'selected':''?>>Yes</option>
								<option value="No"  <?= ($room->ac == 'No')?'selected':''?>>No</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label col-md-4">Attached TV </label>
						<div class="col-md-8">
							<select class="form-control select2" name="tv" data-placeholder="Select One">
								<option value="">Select...</option>
								<option value="Yes"  <?= ($room->bathroom == 'Yes')?'selected':''?> >Yes</option>
								<option value="No"  <?= ($room->tv == 'No')?'selected':''?> >No</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="control-label col-md-4">Full Details </label>
						<div class="col-md-8">
							<textarea name="room_details" class="form-control" rows="7" ><?= $room->room_details ?></textarea>
						</div>
					</div>


					<div class="form-actions">
						<div class="row">
							<div class="offset-md-9 col-md-3">
								<button type="submit" id="room_submit" class="btn btn-info m-r-20">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
