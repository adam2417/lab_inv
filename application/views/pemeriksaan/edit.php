<section class="content-header">
	<h1>Ubah Data Pemeriksaan</h1>
</section>

<section class="content">
	<?php if(isset($_POST['pemeriksaan-edit'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data pemeriksaan. 
		<a href="<?php echo BASE_PATH; ?>/pemeriksaan/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
    <?php
    //var_dump($content);exit;
        $id = '';
        $tglperiksa = '';
        $idpasien = '';
        $iddokter = '';
        $idpraktikum = '';
        $hasil = '';
        $idpegawai = '';
        if(!empty($content)) {
            foreach($content as $pemeriksaan) {
                    $id = $pemeriksaan['PemeriksaanModel']['id'];
                    $tglperiksa = $pemeriksaan['PemeriksaanModel']['tglperiksa'];
                    $idpasien = $pemeriksaan['PemeriksaanModel']['idpasien'];
                    $iddokter = $pemeriksaan['PemeriksaanModel']['iddokter'];
                    $idpraktikum = $pemeriksaan['PemeriksaanModel']['idpraktikum'];
                    $hasil = $pemeriksaan['PemeriksaanModel']['hasil'];
                    $idpegawai = $pemeriksaan['PemeriksaanModel']['idpegawai'];
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
									<input class="form-control" name="id" placeholder="Id" value="<?php echo $id; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tgl Periksa</label>
							<div class="row">								
								<div class="col-sm-4">
                                    <div class="input-group bootstrap-datepicker datepicker">
                                        <input class="form-control" id="tglperiksa" name="tglperiksa" placeholder="Tanggal Periksa" value="<?php echo $tglperiksa?>" />
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
                                        <option value="<?php echo $pasien['PasienModel']['id']; ?>" <?php if ($pasien['PasienModel']['id'] == $idpasien){ echo "selected"; }?> >
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
                                        <option value="<?php echo $dokter['DokterModel']['id']; ?>" <?php if ($dokter['DokterModel']['id'] == $iddokter){ echo "selected"; }?>>
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
                                        <option value="<?php echo $praktikum['PraktikumModel']['id']; ?>" <?php if ($praktikum['PraktikumModel']['id'] == $idpraktikum){ echo "selected"; }?> >
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
                                    <textarea class="form-control" name="hasil"><?php echo $hasil; ?></textarea>
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
                                    <option value="<?php echo $pegawai['PegawaiModel']['id']; ?>" <?php if ($pegawai['PegawaiModel']['id'] == $idpegawai){ echo "selected"; }?>>
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
				<button class="btn btn-success" type="submit" name="pemeriksaan-edit">Ubah</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/pemeriksaan/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>