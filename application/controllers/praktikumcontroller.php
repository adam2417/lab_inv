<?php
class PraktikumController extends AfiController
{
    function beforeAction () {
        if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }
	}
    
    function index(){
        $praktikum = $this->load_model('praktikum');
        $praktikum->showHasOne();
        $praktikumlist = $praktikum->search();
        $this->set('content',$praktikumlist);
    }
    
    function savenew(){
        $praktikum = $this->load_model('praktikum');
        if(isset($_POST['praktikum-add'])){            
            $praktikum->setId($_POST['id']);
            $praktikum->setHari($_POST['hari']);
            $praktikum->setJam($_POST['jam']);
            $praktikum->setJenis($_POST['jenis']);
            $praktikum->setInventaris($_POST['inventaris']);
            $praktikum->savenew();
        }else{
            $inv = $this->load_model('inventory');
            $inv->showHasMany();
            $inventorylist = $inv->search();
            $this->set('inventory',$inventorylist);
        }
    }
    
    function edit() {
        $praktikum = $this->load_model('praktikum');
        if(isset($_POST['praktikum-edit'])){            
            $praktikum->setId($_POST['id']);
            $praktikum->setHari($_POST['hari']);
            $praktikum->setJam($_POST['jam']);
            $praktikum->setJenis($_POST['jenis']);
            $praktikum->setInventaris($_POST['inventaris']);
            $praktikum->saveedit();
        } else {
            $praktikum->where('id',$_GET['id']);
            $praktikum->showHasOne();
            $dkt = $praktikum->search();
            $this->set('content',$dkt);
            
            $inv = $this->load_model('inventory');
            $inv->showHasMany();
            $inventorylist = $inv->search();
            $this->set('inventory',$inventorylist);
        }
    }
    
    function deletedata(){
        $praktikum = $this->load_model('praktikum');
        $praktikum->setId($_GET['id']);
        $inv = $praktikum->deletepraktikum();
    }
	
	function afterAction() {
	}
}
?>