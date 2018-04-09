<section class="content-header">
	<h1>Laporan <span class="small">Daftar Inventory</span></h1>
</section>
<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($content)) { ?>
			<table id="tbhasil" class="table table-striped">
				<thead>
					<tr>
						<th># Inventaris</th>
                        <th>Kategori</th>
                        <th>Kode</th>
						<th>Nama</th>
						<th>Qty</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $i = 0;
                        foreach($content as $inventory_list){
                        foreach($inventory_list as $inventory) {
                            $i++;
                    ?>
					<tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $inventory['jenis_kategori']; ?></td>
						<td><?php echo $inventory['id']; ?></td>
						<td><?php echo $inventory['nama']?></td>
                        <td>&nbsp;</td>
					</tr>
                    <?php  } }?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada data inventaris.
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
    var rptheader = "Daftar Inventory <?php echo $company['config_value']; ?>";
    
    var d = new Date();
    var strDate = d.getFullYear().toString() + d.getMonth().toString() + d.getDate().toString();
    var strTime = d.getHours().toString() + d.getMinutes().toString();
    var pdfName = "rpt_daftar_inventory_" + strDate + "_" + strTime + ".pdf"    
</script>