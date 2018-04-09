<section class="content-header">
	<h1>Pemeriksaan <span class="small">Daftar Pemeriksaan</span></h1>
</section>

<section class="content">
    <a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/pemeriksaan/savenew">Tambah</a>
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Pemeriksaan</th>
						<th>Tgl Periksa</th>
						<th>Pasien</th>
						<th>Dokter</th>
                        <th>Hari Praktikum</th>
                        <th>Jam Praktikum</th>
                        <th>Jenis Praktikum</th>
						<th>Hasil</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($content as $pemeriksaan) { ?>
					<tr>
						<td><?php echo $pemeriksaan['PemeriksaanModel']['id']; ?></td>
						<td><?php echo $pemeriksaan['PemeriksaanModel']['tglperiksa']?></td>
						<td><?php echo $pemeriksaan['pasien']['nama']; ?></td>
						<td><?php echo $pemeriksaan['dokter']['nama']; ?></td>
                        <td><?php echo $pemeriksaan['praktikum']['hari']; ?></td>
                        <td><?php echo date_format(date_create($pemeriksaan['praktikum']['jam']),'H:i A'); ?></td>
                        <td><?php echo $pemeriksaan['praktikum']['jenis']; ?></td>
						<td><?php echo $pemeriksaan['PemeriksaanModel']['hasil']; ?></td>
						<td><a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/pemeriksaan/edit?id=<?php echo $pemeriksaan['PemeriksaanModel']['id']; ?>">Ubah</a></td>
                        <td><a class="btn btn-xs btn-danger" href="<?php echo BASE_PATH; ?>/pemeriksaan/deletedata?id=<?php echo $pemeriksaan['PemeriksaanModel']['id']; ?>">Hapus</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data pemeriksaan.
			</div>
			<?php } ?>
		</div>
	</div>
</section>