<?php $i=1; if(isset($desis) && $desis): foreach($desis as $desi):?>
	<tr class="odd gradeX">

		<td><?= $i++ ?></td>
		<td><?= $desi->desg_code ?></td>
		<td><?= $desi->desg_name?></td>
		<td>
			<a data-src="<?= base_url()?>designation_edit/<?= $desi->desg_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>designation_delete/<?= $desi->desg_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure...??')">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>
<?php endforeach; endif;?>
