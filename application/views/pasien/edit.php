<section class="content-header">
	<h1>Ubah Data Pasien</h1>
</section>

<section class="content">
	<?php if(isset($_POST['pasien-edit'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data pasien. 
		<a href="<?php echo BASE_PATH; ?>/pasien/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
    <?php
        $id = '';
        $nama = '';
        $noktp = '';
        $alamat = '';
        $agama = '';
        if(!empty($content)) {
            foreach($content as $pasien_list) {
                foreach($pasien_list as $pasien) {
                    $id = $pasien['id'];
                    $nama = $pasien['nama'];
                    $noktp = $pasien['noktp'];
                    $alamat = $pasien['alamat'];
                    $agama = $pasien['agama'];
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
							<label>Id</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="id" value="<?php echo $id; ?>" readonly />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Nama</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="nama" value="<?php echo $nama; ?>"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>No. KTP</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="noktp" value="<?php echo $noktp; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<div class="row">
								<div class="col-sm-6">
                                    <textarea class="form-control" name="alamat"><?php echo $alamat; ?></textarea>
								</div>
							</div>
						</div>
                        <div class="form-group">
                            <label>Agama</label>
                            <div class="row">
								<div class="col-sm-4">
                                <input class="form-control" name="agama" value="<?php echo $agama; ?>"/>  
                                </div>
                            </div>
                        </div>
						</div>
					</div>					
				</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="pasien-edit">Ubah</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/pasien/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>