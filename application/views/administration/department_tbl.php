
<?php $i=1; if(isset($departments) && $departments): foreach($departments as $department):?>
	<tr class="odd gradeX">
		<td><?= $i++ ?></td>
		<td><?= $department->dept_code ?></td>
		<td><?= $department->dept_name; ?></td>
		<td>
			<a data-src="<?= base_url()?>department_edit/<?= $department->dept_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs" >
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>department_delete/<?= $department->dept_id; ?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>
<?php endforeach; endif; ?>
