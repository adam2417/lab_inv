<section class="content-header">
	<h1>Tambah Praktikum Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['praktikum-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data praktikum baru. 
		<a href="<?php echo BASE_PATH; ?>/praktikum/savenew"><b>Tambah Lagi</b></a> / 
		<a href="<?php echo BASE_PATH; ?>/praktikum/index"><b>Kembali</b></a>
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
							<label>Hari</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="hari" placeholder="Hari" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Jenis</label>
							<div class="row">								
								<div class="col-sm-4">
									<input class="form-control" name="jenis" placeholder="Jenis" required />
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label>Jam</label>
							<div class="row">								
								<div class="col-sm-4">
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        <input class="form-control" id="jam" name="jam" placeholder="Jam" />
                                    </div>
								</div>
							</div>
						</div>
                        <div class="form-group">
                            <label>Inventaris</label>
                            <div class="row">
								<div class="col-sm-4">                                    
                                <select class="form-control nama_tamu" name="inventaris">
                                    <option selected="selected">--Pilih--</option>                                    
                                    <?php foreach($inventory as $inv) { ?>
                                    <option value="<?php echo $inv['InventoryModel']['id']; ?>">
                                        <?php echo $inv['InventoryModel']['nama']; ?>
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
				<button class="btn btn-success" type="submit" name="praktikum-add">Tambah Praktikum</button>
				<a class="btn btn-warning" href="<?php echo BASE_PATH; ?>/praktikum/index">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>