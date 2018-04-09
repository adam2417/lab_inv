<section class="content-header">
	<h1>Inventaris <span class="small">Daftar Inventaris</span></h1>
</section>

<section class="content">
    <a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/inventaris/savenew">Tambah</a>
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Inventaris</th>
						<th>Nama</th>
						<th>Jenis Kategori</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($content as $inventory_list) { ?>
                    <?php foreach($inventory_list as $inventory) {?>
					<tr>
						<td><?php echo $inventory['id']; ?></td>
						<td><?php echo $inventory['nama']?></td>
						<td><?php echo $inventory['jenis_kategori']; ?></td>
						<td><a class="btn btn-xs btn-primary" href="<?php echo BASE_PATH; ?>/inventaris/edit?id=<?php echo $inventory['id']?>">Ubah</a></td>
                        <td><a class="btn btn-xs btn-danger" href="<?php echo BASE_PATH; ?>/inventaris/deletedata?id=<?php echo $inventory['id']?>">Hapus</a></td>
					</tr>
                    <?php   }?>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data inventaris.
			</div>
			<?php } ?>
		</div>
	</div>
</section>