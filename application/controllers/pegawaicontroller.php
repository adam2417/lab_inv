<?php
class PegawaiController extends AfiController
{
    function beforeAction () {
        if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }
	}
    
    function index(){
        $pegawai = $this->load_model('pegawai');
        $pegawai->showHasMany();
        $pegawailist = $pegawai->search();
        $this->set('content',$pegawailist);
    }
    
    function savenew(){
        $pegawai = $this->load_model('pegawai');
        if(isset($_POST['pegawai-add'])){            
            $pegawai->setNama($_POST['nama']);
            $pegawai->setGolongan($_POST['golongan']);
            $pegawai->setAlamat($_POST['alamat']);
            $pegawai->setAgama($_POST['agama']);
            $pegawai->savenew();
        }
    }
    
    function edit() {
        $pegawai = $this->load_model('pegawai');
        if(isset($_POST['pegawai-edit'])){            
            $pegawai->setId($_POST['id']);
            $pegawai->setNama($_POST['nama']);
            $pegawai->setGolongan($_POST['golongan']);
            $pegawai->setAlamat($_POST['alamat']);
            $pegawai->setAgama($_POST['agama']);
            $pegawai->saveedit();
        } else {
            $pegawai->where('id',$_GET['id']);
            $pegawai->showHasOne();
            $pgw = $pegawai->search();
            $this->set('content',$pgw);
        }
    }
    
    function deletedata(){
        $pegawai = $this->load_model('pegawai');
        $pegawai->setId($_GET['id']);
        $peg = $pegawai->deletepegawai();
    }
    
    function afterAction() {
	}
}