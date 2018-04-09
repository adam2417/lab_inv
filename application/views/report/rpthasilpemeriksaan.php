<section class="content-header">
	<h2>Laporan <span class="small">Hasil Pemeriksaan</span></h2>
</section>
<div class="login-box-body">
    <p><span><h1>Filter</h1></span></p>
    <form name="frmparam" action="" method="post">
        <div class="form-group">
            <label for="idpasien">Pasien: </label>
            <input name="idpasien" id="idpasien" type="text" readonly/>
            <select name="namapasien" onchange="getIdPasien(this);">
                <option>--------------</option>
                <?php
                foreach($pasien as $pb) {
                    echo '<option value="'.$pb['PasienModel']['id'].'">'.$pb['PasienModel']['id'].' - '.$pb['PasienModel']['nama'].'</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="rpttglperiksa">Tgl. Periksa: </label>
            <input name="rpttglperiksa" id="rpttglperiksa" type="text" readonly/>&nbsp;<i class="fa fa-calendar"></i>
        </div>
        <div class="row">
            <div class="col-xs-2">
              <button name="btncari" type="submit" class="btn btn-primary btn-block btn-flat">Cari!</button>
            </div>
            <div class="col-xs-2">
              <button name="btnclear" type="button" class="btn btn-primary btn-block btn-flat">Clear</button>
            </div>
      </div>
    </form>
</div>
<?php if(isset($content)) {  ?> 
<section class="content">    
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table id="tbhasil" class="table table-striped">
				<thead>
					<tr>
						<th># Pemeriksaan</th>
						<th>Tgl Periksa</th>
						<th># Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Hasil Pemeriksaan</th>
						<th>Dokter</th>
                        <th>Pegawai</th>						
					</tr>
				</thead>
				<tbody>
					<?php                                         
                                        $i = 0;
                                        foreach($content as $pemeriksaan) { 
                                            $i++;
                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($pemeriksaan['PemeriksaanModel']['tglperiksa'])); ?></td>
                                            <td><?php echo $pemeriksaan['pasien']['id']; ?></td>
                                            <td><?php echo $pemeriksaan['pasien']['nama']; ?></td>
                                            <td><?php echo $pemeriksaan['PemeriksaanModel']['hasil']; ?></td>
                                            <td><?php echo $pemeriksaan['dokter']['nama']; ?></td>
                                            <td><?php echo $pemeriksaan['pegawai']['nama']; ?></td>						
                                        </tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data pemeriksaan.
			</div>
			<?php } ?>
		</div>
	</div>
    <div class="row">            
            <div class="col-xs-2">
              <button name="btnExport" id="btnExport" type="button" class="btn btn-primary btn-block btn-flat">Cetak PDF</button>
            </div>
      </div>
</section>
<?php } ?>
<script type="application/javascript">
    function getIdPasien(val){
        var idpasien = document.getElementById('idpasien');
        idpasien.value = val.value;
    }
    
    var rptheader = "Laporan Hasil Pemeriksaan";
    
    var d = new Date();
    var strDate = d.getFullYear().toString() + d.getMonth().toString() + d.getDate().toString();
    var strTime = d.getHours().toString() + d.getMinutes().toString();
    var pdfName = "rpt_hasilpemeriksaan_" + strDate + "_" + strTime + ".pdf"    
</script>