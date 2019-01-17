<?php $i=1; if(isset($units) && $units): foreach($units as $unit):?>
<tr class="odd gradeX">
	<td><?= $i++; ?></td>
	<td><?php $date = new DateTime($unit->created_at); echo date_format($date, 'd M Y');?></td>
	<td><?= ucwords($unit->unit_name); ?></td>
	<td>
		<a data-src="<?= base_url()?>unit_edit/<?= $unit->unit_id?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
			<i class="fa fa-pencil"></i>
		</a>
		<a href="<?= base_url();?>unit_delete/<?= $unit->unit_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
			<i class="fa fa-trash-o "></i>
		</a>
	</td>
</tr>
<?php endforeach; endif; ?>