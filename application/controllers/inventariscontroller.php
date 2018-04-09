<?php
class InventarisController extends AfiController
{
    function beforeAction () {
        if(!isset($_SESSION['userid'])){
            redirectAction('login','index',array());
        }
	}
    
    function index(){        
        $inventory = $this->load_model('inventory');
        $inventory->showHasMany();
        $inventorylist = $inventory->search();
        $this->set('content',$inventorylist);
    }
    
    function savenew() {
        $inventory = $this->load_model('inventory');
        if(isset($_POST['inventory-add'])){
            $inventory->setId($_POST['id_inv']);
            $inventory->setNama($_POST['nama_inv']);
            $inventory->setKategori($_POST['jenis_kategori']);
            $inventory->savenew();
        }
    }
    
    function edit() {
        $inventory = $this->load_model('inventory');
        if(isset($_POST['inventory-edit'])){            
            $inventory->setId($_POST['id_inv']);
            $inventory->setNama($_POST['nama_inv']);
            $inventory->setKategori($_POST['jenis_kategori']);
            $inventory->saveedit();
        } else {
            $inventory->where('id',$_GET['id']);
            $inventory->showHasOne();
            $inv = $inventory->search();
            $this->set('content',$inv);
        }
    }
    
    function deletedata(){
        $inventory = $this->load_model('inventory');
        $inventory->setId($_GET['id']);
        $inv = $inventory->deleteinv();
    }
    
    function afterAction() {

	}
}