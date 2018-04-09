<section class="content-header">
	<h1>Tambah Inventory Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['inventory-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data inventory baru. 
		<a href="<?php echo BASE_PATH; ?>/inventaris/savenew"><b>Tambah Lagi</b></a> / 
		<a href="<?php echo BASE_PATH; ?>/inventaris/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
                        <div class="form-group">
							<label>No. Inventory</label>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="id_inv" placeholder='Id Inventory' required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="nama_inv" placeholder="Nama Inventory" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jenis Kategori</label>
							<div class="row">								
								<div class="col-sm-6">
									<input class="form-control" name="jenis_kategori" placeholder="Jenis Kategori"/>
								</div>
							</div>
						</div>						
					</div>					
				</div>
			</div>
			<div class="box-footer"> 
				<button class="btn btn-success" type="submit" name="inventory-add">Tambah</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/inventaris/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>