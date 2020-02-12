<!-- BEGIN Dashboard-->
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10 ">
		<a class="dashboard-stat dashboard-stat-light green-haze" href="javascript:;">
			<div class="visual">
				<i class="fa fa-briefcase fa-icon-medium"></i>
			</div>
			<div class="details">
				<div class="number"><?= $sum_barang ?></div>
				<div class="desc">Jumlah Barang</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
		<a class="dashboard-stat dashboard-stat-light green-haze" href="javascript:;">
			<div class="visual">
				<i class="fa fa-briefcase fa-icon-medium"></i>
			</div>
			<div class="details">
				<div class="number"><?= $sum_stok ?></div>
				<div class="desc">Stock</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
		<a class="dashboard-stat dashboard-stat-light green-haze" href="javascript:;">
			<div class="visual">
				<i class="fa fa-briefcase fa-icon-medium"></i>
			</div>
			<div class="details">
				<div class="number"><?= $sum_amount ?></div>
				<div class="desc">Amount Barang</div>
			</div>
		</a>
	</div>
</div>
<!-- AND DASHBOARD-->

<!-- BEGIN EXAMPLE TABLE PORTLET-->

<div class="tools">
	<a href="javascript:;" class="collapse">
	</a>
	<a href="#portlet-config" data-toggle="modal" class="config">
	</a>
	<a href="javascript:;" class="reload">
	</a>
	<a href="javascript:;" class="remove">
	</a>
</div>

<div class="portlet-body">
	<div class="table-toolbar">
		<div class="row">
			<div class="col-md-6">
				<div class="btn-group">
					<button id="sample_editable_1_new" class="btn green" data-toggle="modal" href="#small">
						Add New <i class="fa fa-plus"></i>
					</button>
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right">
					<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="javascript:;">
								Print </a>
						</li>
						<li>
							<a href="javascript:;">
								Save as PDF </a>
						</li>
						<li>
							<a href="javascript:;">
								Export to Excel </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<table class="table table-striped table-bordered table-hover" id="sample_1">
		<thead>
			<tr>
				<th class="table-checkbox">
					<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
				</th>
				<th>NAMA BARANG</th>
				<th>NO SKU</th>
				<th>STOK AWAL</th>
				<th>COGS</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getbarang as $brg) : ?>
				<tr class="odd gradeX">
					<td><input type="checkbox" class="checkboxes" value="<?= $brg['id']; ?>" /></td>
					<td><?= $brg['nama_barang']; ?></td>
					<td> <?= $brg['no_sku']; ?></td>
					<td> <?= $brg['stok_awal']; ?></td>
					<td class="center"> <?= $brg['cogs']; ?></td>
					<td><span class="label label-sm label-danger"><?= $brg['status']; ?></span></td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
</div>

<!-- END EXAMPLE TABLE PORTLET-->


<!--.modal add Barang-->
<!-- /.modal -->
<div class="modal fade bs-modal-sm" id="small" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header bg-green">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Modal Title</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<form action="<?= base_url(); ?>barang/addBarang" method="post">
						<center>
							<div class="input-icon right input-medium margin-top-10">
								<i class="fa fa-check"></i>
								<input type="text" name="sku" id="sku" class="form-control" placeholder=".NO SKU" required>
							</div>
							<div class="input-icon right input-medium margin-top-10">
								<i class="fa fa-check"></i>
								<input type="text" name="nm_barang" id="nm_barang" class="form-control" placeholder=".Nama Barang" required>
							</div>
							<div class="input-icon right input-medium margin-top-10">
								<i class="fa fa-check"></i>
								<input type="text" name="stok_awal" id="stok_awal" class="form-control" placeholder=".Stok Awal" required>
							</div>
							<div class="input-icon right input-medium margin-top-10">
								<i class="fa fa-check"></i>
								<input type="text" name="cogs" id="cogs" class="form-control" placeholder=".COGS" required>
							</div>
							<hr>
							<div class="modal-footer">
								<button type="button" class="btn default" data-dismiss="modal">Cancel</button>
								<button type="submit" name="addBarang" class="btn green">Tambah</button>
							</div>

						</center>
				</div>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
