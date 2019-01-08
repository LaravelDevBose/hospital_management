<?php $i=1; if(isset($tests) && $tests): foreach($tests as $test):?>
	<tr class="odd gradeX">
		<td><?= $i++ ?></td>
		<td><?= $test->test_code; ?></td>
		<td><?= ucwords($test->test_name)?></td>
		<td style="text-align: center;">
			<?php if($test->test_activation == 'A'):?>
				<span class="label label-sm label-success"> Active </span>
			<?php else:?>
				<span class="label label-sm label-danger"> In-Active </span>
			<?php endif; ?>
		</td>

		<td>
			<a data-src="<?= base_url()?>test_edit/<?= $test->test_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>test_delete/<?= $test->test_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure..?');">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>

<?php endforeach; endif; ?>
