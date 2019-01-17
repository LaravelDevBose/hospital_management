<?php $i=1; if(isset($brands) && $brands): foreach($brands as $brand):?>
	<tr class="odd gradeX">

		<td><?= $i++; ?></td>
		<td><?php $date = new DateTime($brand->created_at); echo date_format($date, 'd M Y');?></td>
		<td><?= $brand->brand_code; ?></td>
		<td><?= $brand->brand_name; ?></td>
		<td>
			<a data-src="<?= base_url()?>brand_edit/<?= $brand->brand_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>brand_delete/<?= $brand->brand_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>
<?php endforeach; endif; ?>