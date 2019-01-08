<style>
	.card {
		margin-top: 0;
		margin-bottom: 0;
	}
</style>

<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<form  id="room_store_form" class="form-horizontal">
				<div class="card card-topline-red">

					<div class="card-body ">
						<div class="row">

							<div class="col-md-4">
								<div class="form-group row">
									<label class="control-label col-md-4">Room Id<span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" readonly value="<?= $room_id ?>" class="form-control input-height" />
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
						<header>Room Or Bed INFORMATION</header>
					</div>
					<div class="card-body ">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Room Name <span class="required"> * </span> </label>
									<div class="col-md-8">
										<input type="text" id="room_name" name="room_name" data-required="1" placeholder="Enter Room name" class="form-control input-height" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Attached Bathroom </label>
									<div class="col-md-8">
										<select class="form-control select2" name="bathroom" data-placeholder="Select One">
											<option value="">Select...</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Attached AC </label>
									<div class="col-md-8">
										<select class="form-control select2" name="ac" data-placeholder="Select One">
											<option value="">Select...</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-4">Attached TV </label>
									<div class="col-md-8">
										<select class="form-control select2" name="tv" data-placeholder="Select One">
											<option value="">Select...</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group row">
									<label class="control-label col-md-4">Full Details </label>
									<div class="col-md-8">
										<textarea name="room_details" class="form-control" rows="7" ></textarea>
									</div>
								</div>


								<div class="form-actions">
									<div class="row">
										<div class="offset-md-6 col-md-6">
											<button type="button" id="room_submit" class="btn btn-info m-r-20">Submit</button>
											<button type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
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
					<header>Room Or bed List</header>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>
							<th style="width: 1%;">#</th>
							<th style="width: 5%;">Room ID</th>
							<th style="width: 20%">Room Or Bed name</th>
							<th style="width: 5%">Bathroom</th>
							<th style="width: 5%;">AC</th>
							<th style="width: 5%;">TV</th>
							<th >Room Details</th>
							<th style="width: 10%;"> Actions </th>
						</tr>
						</thead>
						<tbody id="tbody">
							<?php $i=1; if(isset($rooms) && $rooms): foreach($rooms as $room):?>
								<tr class="odd gradeX">
									<td><?= $i++ ?></td>
									<td><?= $room->room_code; ?></td>
									<td><?= ucwords($room->room_name)?></td>
									<td style="text-align: center;">
										<?php if($room->bathroom == 'Yes'):?>
											<span class="label label-sm label-success"> Yes </span>
										<?php else:?>
											<span class="label label-sm label-danger"> No </span>
										<?php endif; ?>
									</td>
									<td style="text-align: center;">
										<?php if($room->ac == 'Yes'):?>
											<span class="label label-sm label-success"> Yes </span>
										<?php else:?>
											<span class="label label-sm label-danger"> No </span>
										<?php endif; ?>
									</td>
									<td style="text-align: center;">
										<?php if($room->tv == 'Yes'):?>
											<span class="label label-sm label-success"> Yes </span>
										<?php else:?>
											<span class="label label-sm label-danger"> No </span>
										<?php endif; ?>
									</td>
									<td>
										<details>
											<summary>Read full Details</summary>
											<p><?= $room->room_details; ?></p>
										</details>
									</td>
									<td>
										<a data-src="<?= base_url()?>room_edit/<?= $room->room_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url()?>room_delete/<?= $room->room_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure..?');">
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

<?php $this->load->view('ajax/room_ajax');?>
