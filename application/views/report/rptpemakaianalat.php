<?php //var_dump($content); exit;?>
<section class="content-header">
	<h2>Laporan <span class="small">Pemakaian Alat</span></h2>
</section>
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
						<th>Nama Dokter</th>
                        <th>Nama Pegawai</th>	
                        <th>Penggunaan Alat</th>
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
                                            <td><?php echo date('d-m-Y',strtotime($pemeriksaan['Pemeriksaan']['tglperiksa'])); ?></td>
                                            <td><?php echo $pemeriksaan['Pasien']['id']; ?></td>
                                            <td><?php echo $pemeriksaan['Pasien']['nama']; ?></td>
                                            <td><?php echo $pemeriksaan['Pemeriksaan']['hasil']; ?></td>
                                            <td><?php echo $pemeriksaan['Dokter']['nama']; ?></td>
                                            <td><?php echo $pemeriksaan['Pegawai']['nama']; ?></td>
                                            <td><?php echo $pemeriksaan['Inventaris']['nama']; ?></td>
                                        </tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data pemakaian alat.
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
<script type="application/javascript">
    var rptheader = "List Pemakaian Alat Pada <?php echo $company['config_value']; ?>";
    
    var d = new Date();
    var strDate = d.getFullYear().toString() + d.getMonth().toString() + d.getDate().toString();
    var strTime = d.getHours().toString() + d.getMinutes().toString();
    var pdfName = "rpt_lst_pemakaian_alat_" + strDate + "_" + strTime + ".pdf"    
</script>