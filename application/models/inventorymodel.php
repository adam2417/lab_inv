<?php
class InventoryModel extends AfiModel
{
    protected $table_name = 'tb_inventaris';
    
    private $_id;
    private $_nama;
    private $_kategory;
    
    function setId($id){
        $this->_id = $id;
    }
    
    function setNama($nama){
        $this->_nama = $nama;
    }
    
    function setKategori($kategori){
        $this->_kategory = $kategori;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function getNama(){
        return $this->_nama;
    }
    
    function getKategori(){
        return $this->_kategory;
    }
    
    function __construct(){
        parent::__construct();
    }
    
    function savenew() {
        $id = $this->getId();
        $nama = $this->getNama();
        $kategori = $this->getKategori();
        $this->_mode = 'insert';
        
        $inventory = array($id,$nama,$kategori);
        $this->save($inventory);
    }
    
    function saveedit() {
        $id = $this->getId();
        $nama = $this->getNama();
        $kategori = $this->getKategori();
        $this->_mode = 'update';
        
        $this->id = $id;
        $inventory = array('id'=>$id,'nama'=>$nama,'jenis_kategori'=>$kategori);
        $this->save($inventory);
    }
    
    function deleteinv() {
        $id = $this->getId();        
        $this->id = $id;
        
        $this->delete();
    }
}