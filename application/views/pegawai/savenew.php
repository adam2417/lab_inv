<section class="content-header">
	<h1>Tambah Pegawai Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['pegawai-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data pegawai baru. 
		<a href="<?php echo BASE_PATH; ?>/pegawai/savenew"><b>Tambah Lagi</b></a> / 
		<a href="<?php echo BASE_PATH; ?>/pegawai/index"><b>Kembali</b></a>
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
							<label>Golongan</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="golongan" placeholder="Golongan" required />
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
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="pegawai-add">Tambah Pegawai</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/pegawai/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>