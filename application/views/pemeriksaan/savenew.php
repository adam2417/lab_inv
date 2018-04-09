<section class="content-header">
	<h1>Tambah Pemeriksaan Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['pemeriksaan-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data pemeriksaan baru. 
		<a href="<?php echo BASE_PATH; ?>/pemeriksaan/savenew"><b>Tambah Lagi</b></a> / 
		<a href="<?php echo BASE_PATH; ?>/pemeriksaan/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Id</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="id" placeholder="Id" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tgl Periksa</label>
							<div class="row">								
								<div class="col-sm-4">
                                    <div class="input-group bootstrap-datepicker datepicker">
                                        <input class="form-control" id="tglperiksa" name="tglperiksa" placeholder="Tanggal Periksa" required />
                                    </div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Pasien</label>
							<div class="row">								
								<div class="col-sm-4">
									<select class="form-control nama_tamu" name="idpasien">
                                        <option selected="selected">--Pilih--</option>                                    
                                        <?php foreach($pasien as $pasien) { ?>
                                        <option value="<?php echo $pasien['PasienModel']['id']; ?>">
                                            <?php echo $pasien['PasienModel']['nama']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
							<label>Dokter</label>
							<div class="row">								
								<div class="col-sm-4">
									<select class="form-control nama_tamu" name="iddokter">
                                        <option selected="selected">--Pilih--</option>                                    
                                        <?php foreach($dokter as $dokter) { ?>
                                        <option value="<?php echo $dokter['DokterModel']['id']; ?>">
                                            <?php echo $dokter['DokterModel']['nama']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label>Praktikum</label>
							<div class="row">								
								<div class="col-sm-5">
									<select class="form-control nama_tamu" name="idpraktikum">
                                        <option selected="selected">--Pilih--</option>                                    
                                        <?php foreach($praktikum as $praktikum) { ?>
                                        <option value="<?php echo $praktikum['PraktikumModel']['id']; ?>">
                                            <?php echo $praktikum['PraktikumModel']['jenis'] . ' - ' .ucwords($praktikum['PraktikumModel']['hari']). ',' . date_format(date_create($praktikum['PraktikumModel']['jam']),'H:i'); ?>
                                        </option>
                                        <?php } ?>
                                    </select>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label>Hasil</label>
							<div class="row">								
								<div class="col-sm-6">
                                    <textarea class="form-control" name="hasil"></textarea>
								</div>
							</div>
						</div>
                        <div class="form-group">
                            <label>Pegawai</label>
                            <div class="row">
								<div class="col-sm-4">                                    
                                <select class="form-control nama_tamu" name="idpegawai">
                                    <option selected="selected">--Pilih--</option>                                    
                                    <?php foreach($pegawai as $pegawai) { ?>
                                    <option value="<?php echo $pegawai['PegawaiModel']['id']; ?>">
                                        <?php echo $pegawai['PegawaiModel']['nama']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                        </div>
						</div>
					</div>					
				</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="pemeriksaan-add">Tambah Praktikum</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/pemeriksaan/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>