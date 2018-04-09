<section class="content-header">
	<h1>Ubah Data Praktikum</h1>
</section>

<section class="content">
	<?php if(isset($_POST['praktikum-edit'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data praktikum. 
		<a href="<?php echo BASE_PATH; ?>/praktikum/index"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
    <?php
    //var_dump($content);exit;
        $id = '';
        $hari = '';
        $jam = '';
        $jenis = '';
        $inventarisid = '';
        $inventaris = '';
        if(!empty($content)) {
            foreach($content as $praktikum) {
                    $id = $praktikum['PraktikumModel']['id'];
                    $hari = $praktikum['PraktikumModel']['hari'];
                    $jam = $praktikum['PraktikumModel']['jam'];
                    $jenis = $praktikum['PraktikumModel']['jenis'];
                    $inventarisid = $praktikum['inventaris']['id'];
                    $inventaris = $praktikum['inventaris']['nama'];
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
							<label>Hari</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="hari" value="<?php echo $hari; ?>"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jam</label>
							<div class="row">								
								<div class="col-sm-4">
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        <input class="form-control" name="jam" id="jam" value="<?php echo date('h:m A',$jam); ?>" />
                                    </div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jenis</label>
							<div class="row">
								<div class="col-sm-6">
                                    <textarea class="form-control" name="jenis"><?php echo $jenis; ?></textarea>
								</div>
							</div>
						</div>
                        <div class="form-group">
                            <label>Inventaris</label>
                            <div class="row">
								<div class="col-sm-4">
                                <select class="form-control nama_tamu" name="inventaris">
                                    <option>--Pilih--</option>
                                    <?php foreach($inventory as $inv) { ?>
                                    <option value="<?php echo $inv['InventoryModel']['id']; ?>"<?php if($inv['InventoryModel']['id'] == $inventarisid) { echo ' selected'; }?>><?php echo $inv['InventoryModel']['nama']; ?></option><?php } ?>
                                </select>  
                                </div>
                            </div>
                        </div>
						</div>
					</div>					
				</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="praktikum-edit">Ubah</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/praktikum/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>