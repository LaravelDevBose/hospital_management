<div class="" style="margin-top: 10px;">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-topline-aqua">
				<div class="card-head">
					<header>Room Or bed List</header>
					<div class="btn-group pull-right">
						<a href="<?= base_url()?>test_template_entry" class="btn btn-info">
							Add New Template <i class="fa fa-plus"></i>
						</a>
					</div>
				</div>
				<div class="card-body ">
					<table class="table table-striped table-bordered table-hover table-checkable order-column" style="width: 100%" id="example4">
						<thead>
						<tr>
							<th style="width: 1%;">#</th>
							<th style="width: 5%;">Test ID</th>
							<th style="width: 20%">Test Name</th>
							<th style="width: 5%">Added By</th>
							<th style="width: 10%;"> Actions </th>
						</tr>
						</thead>
						<tbody id="tbody">
						<?php $i=1; if(isset($templates) && $templates): foreach($templates as $template):?>
							<tr class="odd gradeX">
								<td><?= $i++ ?></td>
								<td><?= $template->test_code; ?></td>
								<td><?= ucwords($template->test_name)?></td>
								<td style="text-align: center;"><?= ucfirst($template->created_by)?> </td>
								<td>
									<a href="<?= base_url()?>test_template_preview/<?= $template->temp_id?>" class="btn btn-info btn-xs">
										<i class="fa fa-info"></i>
									</a>
									<a href="<?= base_url()?>test_template_edit/<?= $template->temp_id?>" class="btn btn-primary btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?= base_url()?>test_template_delete/<?= $template->temp_id?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure..?');">
										<i class="fa fa-trash-o "></i>
									</a>
								</td>
							</tr>

						<?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
