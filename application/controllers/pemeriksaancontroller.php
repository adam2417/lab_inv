<?php
class PemeriksaanController extends AfiController
{
    function beforeAction () {
        if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }
	}
    
    function index(){
        $pemeriksaan = $this->load_model('pemeriksaan');
        $pemeriksaan->showHasOne();
        $pemeriksaanlist = $pemeriksaan->search();
        $this->set('content',$pemeriksaanlist);
    }
    
    function savenew(){
        $pemeriksaan = $this->load_model('pemeriksaan');
        if(isset($_POST['pemeriksaan-add'])){            
            $pemeriksaan->setId($_POST['id']);
            $pemeriksaan->setTglPeriksa($_POST['tglperiksa']);
            $pemeriksaan->setPasien($_POST['idpasien']);
            $pemeriksaan->setDokter($_POST['iddokter']);
            $pemeriksaan->setPraktikum($_POST['idpraktikum']);
            $pemeriksaan->setHasil($_POST['hasil']);
            $pemeriksaan->setPegawai($_POST['idpegawai']);
            $pemeriksaan->savenew();
        }else{
            $pasien = $this->load_model('pasien');
            $pasien->showHasMany();
            $pasienlist = $pasien->search();
            $this->set('pasien',$pasienlist);
            
            $dokter = $this->load_model('dokter');
            $dokter->showHasMany();
            $dokterlist = $dokter->search();
            $this->set('dokter',$dokterlist);
            
            $pegawai = $this->load_model('pegawai');
            $pegawai->showHasMany();
            $pegawailist = $pegawai->search();
            $this->set('pegawai',$pegawailist);
            
            $praktikum = $this->load_model('praktikum');
            $praktikum->showHasMany();
            $praktikumlist = $praktikum->search();
            $this->set('praktikum',$praktikumlist);
        }
    }
    
    function edit() {
        $pemeriksaan = $this->load_model('pemeriksaan');
        if(isset($_POST['pemeriksaan-edit'])){            
            $pemeriksaan->setId($_POST['id']);
            $pemeriksaan->setTglPeriksa($_POST['tglperiksa']);
            $pemeriksaan->setPasien($_POST['idpasien']);
            $pemeriksaan->setDokter($_POST['iddokter']);
            $pemeriksaan->setPraktikum($_POST['idpraktikum']);
            $pemeriksaan->setHasil($_POST['hasil']);
            $pemeriksaan->setPegawai($_POST['idpegawai']);
            $pemeriksaan->saveedit();
        } else {
            $pemeriksaan->where('id',$_GET['id']);
            $pemeriksaan->showHasOne();
            $pemeriksaanlist = $pemeriksaan->search();
            $this->set('content',$pemeriksaanlist);
            
            $pasien = $this->load_model('pasien');
            $pasien->showHasMany();
            $pasienlist = $pasien->search();
            $this->set('pasien',$pasienlist);
            
            $dokter = $this->load_model('dokter');
            $dokter->showHasMany();
            $dokterlist = $dokter->search();
            $this->set('dokter',$dokterlist);
            
            $pegawai = $this->load_model('pegawai');
            $pegawai->showHasMany();
            $pegawailist = $pegawai->search();
            $this->set('pegawai',$pegawailist);
            
            $praktikum = $this->load_model('praktikum');
            $praktikum->showHasMany();
            $praktikumlist = $praktikum->search();
            $this->set('praktikum',$praktikumlist);
        }
    }
    
    function deletedata(){
        $pemeriksaan = $this->load_model('pemeriksaan');
        $pemeriksaan->setId($_GET['id']);
        $inv = $pemeriksaan->deletepemeriksaan();
    }
	
	function afterAction() {
	}
}