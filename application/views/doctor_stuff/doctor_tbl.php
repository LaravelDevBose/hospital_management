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