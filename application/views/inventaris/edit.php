<section class="content-header">
	<h1>Ubah Inventory</h1>
</section>

<section class="content">
	<?php if(isset($_POST['inventory-edit'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data inventaris. 
		<a href="<?php echo BASE_PATH; ?>/inventaris/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
    <?php
        $id = '';
        $nama_inv = '';
        $jenis_kategori = '';
        if(!empty($content)) {
            foreach($content as $inventory_list) {
                foreach($inventory_list as $inventory) {
                    $id = $inventory['id'];
                    $nama_inv = $inventory['nama'];
                    $jenis_kategori = $inventory['jenis_kategori'];
                }
            }
        }
    ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
                        <div class="form-group">
							<label>No. Inventory</label>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="id_inv" value="<?php echo $id; ?>" readonly/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="nama_inv" value="<?php echo $nama_inv; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jenis Kategori</label>
							<div class="row">								
								<div class="col-sm-6">
									<input class="form-control" name="jenis_kategori" value="<?php echo $jenis_kategori; ?>"/>
								</div>
							</div>
						</div>						
					</div>					
				</div>
			</div>
			<div class="box-footer"> 
				<button class="btn btn-success" type="submit" name="inventory-edit">Ubah</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/inventaris/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>