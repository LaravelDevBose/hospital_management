<div class="row">
	<div class="card card-topline-red">
		<div class="card-head">
			<header>Stuff List</header>
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
					<?php if(isset($stuffs) && $stuffs): foreach($stuffs as $stuff): ?>
						<tr class="odd gradeX">
							<td class="patient-img"><?= $stuff->stuff_code?> </td>
							<td><?= $stuff->stuff_name; ?></td>
							<td class="left"><?= $stuff->dept_name ?></td>
							<td class="left"><?= $stuff->desg_name ?></td>
							<td><a href="tel:<?= $stuff->stuff_phone ?>"><?= $stuff->stuff_phone ?></a></td>
							<td><a href="mailto:<?= $stuff->stuff_email ?>"><?= $stuff->stuff_email ?> </a></td>
							<td class="left"><?= $stuff->stuff_gender ?></td>
							<td class="left">
								<details>
									<summary>View Address</summary>
									<p><?= $stuff->stuff_address ?></p>
								</details>
							</td>
							<td class="left">
								<details>
									<summary>View Education</summary>
									<p><?= $stuff->stuff_edu ?></p>
								</details>
							</td>
							<td>
								<a data-src="<?= base_url()?>stuff_edit/<?= $stuff->stuff_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="<?= base_url()?>stuff_delete/<?= $stuff->stuff_id?>" onclick="return confirm('Are You Sure..??');" class="btn btn-danger btn-xs">
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
