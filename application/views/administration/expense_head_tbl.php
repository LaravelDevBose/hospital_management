<?php $i = 1; if(isset($heads) && $heads): foreach($heads as $head):?>
	<tr class="odd gradeX">

		<td><?= $i++ ?></td>
		<td><?= $head->eh_code; ?></td>
		<td><?= $head->eh_name; ?></td>
		<td>
			<a data-src="<?= base_url()?>expense_head_edit/<?= $head->eh_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>expense_head_delete/<?= $head->eh_id; ?>" class="btn btn-danger btn-xs">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>
<?php endforeach; endif; ?>
