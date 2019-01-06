<?php $i=1; if(isset($rooms) && $rooms): foreach($rooms as $room):?>
	<tr class="odd gradeX">
		<td><?= $i++ ?></td>
		<td><?= $room->room_code; ?></td>
		<td><?= ucwords($room->room_name)?></td>
		<td style="text-align: center;">
			<?php if($room->bathroom == 'Yes'):?>
				<span class="label label-sm label-success"> Yes </span>
			<?php else:?>
				<span class="label label-sm label-danger"> No </span>
			<?php endif; ?>
		</td>
		<td style="text-align: center;">
			<?php if($room->ac == 'Yes'):?>
				<span class="label label-sm label-success"> Yes </span>
			<?php else:?>
				<span class="label label-sm label-danger"> No </span>
			<?php endif; ?>
		</td>
		<td style="text-align: center;">
			<?php if($room->tv == 'Yes'):?>
				<span class="label label-sm label-success"> Yes </span>
			<?php else:?>
				<span class="label label-sm label-danger"> No </span>
			<?php endif; ?>
		</td>
		<td>
			<details>
				<summary>Read full Details</summary>
				<p><?= $room->room_details; ?></p>
			</details>
		</td>
		<td>
			<a href="<?= base_url()?>room_edit/<?= $room->room_id?>" class="btn btn-primary btn-xs linka fancybox fancybox.ajax">
				<i class="fa fa-pencil"></i>
			</a>
			<a href="<?= base_url()?>room_delete/<?= $room->room_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure..?');">
				<i class="fa fa-trash-o "></i>
			</a>
		</td>
	</tr>

<?php endforeach; endif; ?>
