<?php $i = 1; if(isset($months) && $months): foreach($months as $month):?>
	<tr class="odd gradeX">
		<td><?= $i++ ?></td>
		<td><?= $month->month_name; ?></td>
		<td><?= $month->year; ?></td>
		<td><?= $month->month_name.'-'.$month->year; ?></td>
		<td>
			<a data-src="<?= base_url()?>salary_month_edit/<?= $month->slm_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>salary_month_delete/<?= $month->slm_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>
<?php endforeach; endif; ?>
