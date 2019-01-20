<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>Doctor List</header>
			</div>
			<div class="card-body ">
				<div class="table-scrollable">
					<table class="table table-hover table-checkable order-column full-width" id="example4">
						<thead>
						<tr>
							<th># ID</th>
							<th> Name </th>
							<th> Department </th>
							<th> Designation </th>
							<th> Mobile </th>
							<th> Email </th>
							<th> Gender </th>
							<th> Address </th>
							<th> Education </th>
							<th> Action </th>
						</tr>
						</thead>
						<tbody id="tbody">
						<?php if(isset($doctors) && $doctors): foreach($doctors as $doctor): ?>
							<tr class="odd gradeX">
								<td class="patient-img"><?= $doctor->doc_code?> </td>
								<td><?= $doctor->doc_name; ?></td>
								<td class="left"><?= $doctor->dept_name ?></td>
								<td class="left"><?= $doctor->desg_name ?></td>
								<td><a href="tel:<?= $doctor->doc_phone ?>"><?= $doctor->doc_phone ?></a></td>
								<td><a href="mailto:<?= $doctor->doc_email ?>"><?= $doctor->doc_email ?> </a></td>
								<td class="left"><?= $doctor->doc_gender ?></td>
								<td class="left">
									<details>
										<summary>View Address</summary>
										<p><?= $doctor->doc_address ?></p>
									</details>
								</td>
								<td class="left">
									<details>
										<summary>View Education</summary>
										<p><?= $doctor->doc_edu ?></p>
									</details>
								</td>
								<td>
									<a data-src="<?= base_url()?>doctor_edit/<?= $doctor->doc_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?= base_url()?>doctor_delete/<?= $doctor->doc_id?>" onclick="return confirm('Are You Sure..??');" class="btn btn-danger btn-xs">
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
