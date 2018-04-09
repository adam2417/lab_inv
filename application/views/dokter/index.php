<section class="content-header">
	<h1>Dokter <span class="small">Daftar Dokter</span></h1>
</section>

<section class="content">
    <a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/dokter/savenew">Tambah</a>
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Dokter</th>
						<th>Nama</th>
						<th>Golongan</th>
						<th>Alamat</th>
						<th>Agama</th>
					</tr>
				</thead>
				<tbody>
                    <?php $i = 0; ?>
					<?php foreach($content as $dokter_list) { ?>
                    <?php foreach($dokter_list as $dokter) {?>
					<tr>
						<td><?php echo $dokter['id']; ?></td>
						<td><?php echo $dokter['nama']?></td>
						<td><?php echo $dokter['golongan']; ?></td>
						<td><?php echo $dokter['alamat']; ?></td>
						<td><?php echo $dokter['agama']; ?></td>
						<td><a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/dokter/edit?id=<?php echo $dokter['id']; ?>">Ubah</a></td>
                        <td><a class="btn btn-xs btn-danger" href="<?php echo BASE_PATH; ?>/dokter/deletedata?id=<?php echo $dokter['id']; ?>">Hapus</a></td>
					</tr>
                    <?php   }?>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data dokter.
			</div>
			<?php } ?>
		</div>
	</div>
</section>