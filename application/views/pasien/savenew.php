<section class="content-header">
	<h1>Tambah Pasien Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['pasien-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data pasien baru. 
		<a href="<?php echo BASE_PATH; ?>/pasien/savenew"><b>Tambah Lagi</b></a> / 
		<a href="<?php echo BASE_PATH; ?>/pasien/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nama</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="nama" placeholder="Nama" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>No. KTP</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="noktp" placeholder="No. KTP" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<div class="row">
								<div class="col-sm-6">
                                    <textarea class="form-control" name="alamat"></textarea>
								</div>
							</div>
						</div>
                        <div class="form-group">
                            <label>Agama</label>
                            <div class="row">
								<div class="col-sm-4">
                                <input class="form-control" name="agama" placeholder="Agama" />  
                                </div>
                            </div>
                        </div>
						</div>
					</div>					
				</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="pasien-add">Tambah Pasien</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/pasien/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>