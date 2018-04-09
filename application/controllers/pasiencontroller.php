<?php
class PasienController extends AfiController
{
    function beforeAction () {
        if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }
	}
    
    function index(){
        $pasien = $this->load_model('pasien');
        $pasien->showHasMany();
        $pasienlist = $pasien->search();
        $this->set('content',$pasienlist);
    }
    
    function savenew(){
        $pasien = $this->load_model('pasien');
        if(isset($_POST['pasien-add'])){            
            $pasien->setNama($_POST['nama']);
            $pasien->setNoKTP($_POST['noktp']);
            $pasien->setAlamat($_POST['alamat']);
            $pasien->setAgama($_POST['agama']);
            $pasien->savenew();
        }
    }
    
    function edit() {
        $pasien = $this->load_model('pasien');
        if(isset($_POST['pasien-edit'])){            
            $pasien->setId($_POST['id']);
            $pasien->setNama($_POST['nama']);
            $pasien->setNoKTP($_POST['noktp']);
            $pasien->setAlamat($_POST['alamat']);
            $pasien->setAgama($_POST['agama']);
            $pasien->saveedit();
        } else {
            $pasien->where('id',$_GET['id']);
            $pasien->showHasOne();
            $dkt = $pasien->search();
            $this->set('content',$dkt);
        }
    }
    
    function deletedata(){
        $pasien = $this->load_model('pasien');
        $pasien->setId($_GET['id']);
        $dkt = $pasien->deletepasien();
    }
	
	function afterAction() {
	}
}