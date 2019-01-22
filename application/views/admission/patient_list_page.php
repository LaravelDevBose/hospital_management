<div class="">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-topline-red">
				<div class="card-head">
					<header>Patient List</header>

				</div>
				<div class="card-body ">
					
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>

							<th>#ID</th>
							<th>Full name</th>
							<th>Emg. Person Name</th>
							<th>Phone No</th>
							<th>Blood Group</th>
							<th>Age</th>
							<th>Gender</th>
							
							<th> Actions </th>
						</tr>
						</thead>
						<tbody>
						<tr class="odd gradeX">
							<?php if(isset($patients) && $patients): foreach($patients as $patient):?>
							<td><?= $patient->patient_code; ?></td>
							<td><?= $patient->first_name.' '.$patient->last_name; ?></td>
							<td><?= $patient->emg_fullname; ?></td>
							<td><?= $patient->emg_mobile ?></td>
							<td><?= $patient->blood_group ?></td>
							<td><?= $patient->age; ?></td>
							<td><?= $patient->patient_gender; ?></td>
							
							<td>
								<a href="<?= base_url(); ?>patient_edit/<?= $patient->patient_id?>" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="<?= base_url();?>patient_delete/<?= $patient->patient_id?>" onclick="return confirm('Are You Sure..?');" class="btn btn-danger btn-xs">
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
