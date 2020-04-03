<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Report Kas</h6>
		<div class="button">
			<form method="post" action="<?=base_url('#') ?>">
				<input type="hidden" name="tgl1" value="<?=$tgl1 ?>">
				<input type="hidden" name="tgl2" value="<?=$tgl2 ?>">
				<button type="submit" class="btn btn-primary text-white btn-sm"><i class="fas fa-download"></i>
					Export
				</button>
			</form>
		</div>
	</div>
	<div class="card-body">
		
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Description</th>
					<th>In</th>
					<th>Out</th>
					<th>Saldo</th>
				</tr>
				<tbody>
					<?php $no=1;
					foreach ($report as $dt) :?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $dt->tanggal ?></td>
							<td><?php echo $dt->description  ?></td>
							<td><?php echo $dt->tran_in  ?></td>
							<td><?php echo $dt->tran_out ?></td>
							<td><?php echo $dt->saldo ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>