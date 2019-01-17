<?php $i=1; if(isset($categorys) && $categorys): foreach($categorys as $category): ?>
	<tr class="odd gradeX">

		<td><?= $i++ ?></td>
		<td><?php $date = new DateTime($category->created_at); echo date_format($date, 'd M Y');?></td>
		<td><?= $category->cat_code; ?></td>
		<td><?= $category->cat_name; ?></td>
		<td>
			<a data-src="<?= base_url()?>category_edit/<?= $category->cat_id; ?>" href="javascript:;"  data-fancybox data-type="ajax" class="btn btn-primary btn-xs">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>category_delete/<?= $category->cat_id?>" onclick="return confirm('Are You Sure..??')" class="btn btn-danger btn-xs">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>
<?php endforeach; endif; ?>