<?php
class DokterController extends AfiController
{
    function beforeAction () {
        if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }
	}
    
    function index(){
        $dokter = $this->load_model('dokter');
        $dokter->showHasMany();
        $dokterlist = $dokter->search();
        $this->set('content',$dokterlist);
    }
    
    function savenew(){
        $dokter = $this->load_model('dokter');
        if(isset($_POST['dokter-add'])){            
            $dokter->setNama($_POST['nama']);
            $dokter->setGolongan($_POST['golongan']);
            $dokter->setAlamat($_POST['alamat']);
            $dokter->setAgama($_POST['agama']);
            $dokter->savenew();
        }
    }
    
    function edit() {
        $dokter = $this->load_model('dokter');
        if(isset($_POST['dokter-edit'])){            
            $dokter->setId($_POST['id']);
            $dokter->setNama($_POST['nama']);
            $dokter->setGolongan($_POST['golongan']);
            $dokter->setAlamat($_POST['alamat']);
            $dokter->setAgama($_POST['agama']);
            $dokter->saveedit();
        } else {
            $dokter->where('id',$_GET['id']);
            $dokter->showHasOne();
            $dkt = $dokter->search();
            $this->set('content',$dkt);
        }
    }
    
    function deletedata(){
        $dokter = $this->load_model('dokter');
        $dokter->setId($_GET['id']);
        $dkt = $dokter->deletedokter();
    }
	
	function afterAction() {
	}
}