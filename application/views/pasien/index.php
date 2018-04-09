<section class="content-header">
	<h1>Pasien <span class="small">Daftar Pasien</span></h1>
</section>

<section class="content">
    <a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/pasien/savenew">Tambah</a>
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Pasien</th>
						<th>Nama</th>
						<th>No.KTP</th>
						<th>Alamat</th>
						<th>Agama</th>
					</tr>
				</thead>
				<tbody>
                    <?php $i = 0; ?>
					<?php foreach($content as $pasien_list) { ?>
                    <?php foreach($pasien_list as $pasien) {?>
					<tr>
						<td><?php echo $pasien['id']; ?></td>
						<td><?php echo $pasien['nama']?></td>
						<td><?php echo $pasien['noktp']; ?></td>
						<td><?php echo $pasien['alamat']; ?></td>
						<td><?php echo $pasien['agama']; ?></td>
						<td><a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/pasien/edit?id=<?php echo $pasien['id']; ?>">Ubah</a></td>
                        <td><a class="btn btn-xs btn-danger" href="<?php echo BASE_PATH; ?>/pasien/deletedata?id=<?php echo $pasien['id']; ?>">Hapus</a></td>
					</tr>
                    <?php   }?>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data pasien.
			</div>
			<?php } ?>
		</div>
	</div>
</section>