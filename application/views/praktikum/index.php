<section class="content-header">
	<h1>Praktikum <span class="small">Daftar Praktikum</span></h1>
</section>

<section class="content">
    <a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/praktikum/savenew">Tambah</a>
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Praktikum</th>
						<th>Hari</th>
						<th>Jam</th>
						<th>Jenis</th>
						<th>Inventaris</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($content as $praktikum) { ?>
					<tr>
						<td><?php echo $praktikum['PraktikumModel']['id']; ?></td>
						<td><?php echo $praktikum['PraktikumModel']['hari']?></td>
						<td><?php echo date_format(date_create($praktikum['PraktikumModel']['jam']),'H:i A'); ?></td>
						<td><?php echo $praktikum['PraktikumModel']['jenis']; ?></td>
						<td><?php echo $praktikum['inventaris']['nama']; ?></td>
						<td><a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/praktikum/edit?id=<?php echo $praktikum['PraktikumModel']['id']; ?>">Ubah</a></td>
                        <td><a class="btn btn-xs btn-danger" href="<?php echo BASE_PATH; ?>/praktikum/deletedata?id=<?php echo $praktikum['PraktikumModel']['id']; ?>">Hapus</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data praktikum.
			</div>
			<?php } ?>
		</div>
	</div>
</section>