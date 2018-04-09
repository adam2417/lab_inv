<section class="content-header">
	<h1>Pegawai <span class="small">Daftar Pegawai</span></h1>
</section>

<section class="content">
    <a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/pegawai/savenew">Tambah</a>
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Pegawai</th>
						<th>Nama</th>
						<th>Golongan</th>
						<th>Alamat</th>
						<th>Agama</th>
					</tr>
				</thead>
				<tbody>
                    <?php $i = 0; ?>
					<?php foreach($content as $pegawai_list) { ?>
                    <?php foreach($pegawai_list as $pegawai) {?>
					<tr>
						<td><?php echo $pegawai['id']; ?></td>
						<td><?php echo $pegawai['nama']?></td>
						<td><?php echo $pegawai['golongan']; ?></td>
						<td><?php echo $pegawai['alamat']; ?></td>
						<td><?php echo $pegawai['agama']; ?></td>
						<td><a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/pegawai/edit?id=<?php echo $pegawai['id']; ?>">Ubah</a></td>
                        <td><a class="btn btn-xs btn-danger" href="<?php echo BASE_PATH; ?>/pegawai/deletedata?id=<?php echo $pegawai['id']; ?>">Hapus</a></td>
					</tr>
                    <?php   }?>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data pegawai.
			</div>
			<?php } ?>
		</div>
	</div>
</section>