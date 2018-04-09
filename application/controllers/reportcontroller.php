<?php
class ReportController extends AfiController
{
    function beforeAction () {
        
	}
    
    function index(){
        
    }
    
    function rptHasilPemeriksaan() {
        $pemeriksaan = $this->load_model('pemeriksaan');
        if(!(isset($_POST['btncari']))) {            
            $pasien = $this->load_model('pasien');
            $pasien->showHasMany();
            $pasienlist = $pasien->search();
            $this->set('pasien',$pasienlist);
        }else{
            $idpasien = $_POST['idpasien'];
            $tglperiksa = date('Y-m-d',strtotime($_POST['rpttglperiksa']));
            $pemeriksaan->whereArray(
                array('idpasien' => $idpasien,
                      'tglperiksa' => $tglperiksa));
            $pemeriksaan->showHasOne();
            $periksa = $pemeriksaan->search();
            $this->set('content',$periksa);
        }
    }
    
    function rptDaftarInventory() {
        $inventory = $this->load_model('inventory');
        $inventory->showHasMany();
        $inventorylist = $inventory->search();
        $this->set('content',$inventorylist);
    }
    
    function rptPemakaianAlat() {
        $pemeriksaan = $this->load_model('pemeriksaan');
        //$pemeriksaan->showHasMany();
        //$periksa = $pemeriksaan->search();
        $periksa = $pemeriksaan->customPemeriksaan();
        $this->set('content',$periksa);
    }
    
    function afterAction() {
	}
    
}