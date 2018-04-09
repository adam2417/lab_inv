<?php
class DokterModel extends AfiModel
{
    protected $table_name = 'tb_dokter';
    
    /*
        Initiate the field
    */
    private $_id = '';
    private $_nama;
    private $_golongan;
    private $_alamat;
    private $_agama;
    
    function setId($_id){
        $this->_id = $_id;
    }
    
    function setNama($_nama){
        $this->_nama = $_nama;
    }
    
    function setGolongan($_golongan){
        $this->_golongan = $_golongan;
    }
    
    function setAlamat($_alamat){
        $this->_alamat = $_alamat;
    }
    
    function setAgama($_agama) {
        $this->_agama = $_agama;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function getNama(){
        return $this->_nama;
    }
    
    function getGolongan(){
        return $this->_golongan;
    }
    
    function getAlamat(){
        return $this->_alamat;
    }
    
    function getAgama(){
        return $this->_agama;
    }
    
    function __construct(){
        parent::__construct();
    }
    
    function savenew(){
        $id = $this->getId();
        $nama = $this->getNama();
        $golongan = $this->getGolongan();
        $alamat = $this->getAlamat();
        $agama = $this->getAgama();
        $this->_mode = 'insert';
        
        $dokter = array($id,$nama,$golongan,$alamat,$agama);
        $this->save($dokter);
    }
    
    function saveedit() {
        $id = $this->getId();
        $nama = $this->getNama();
        $golongan = $this->getGolongan();
        $alamat = $this->getAlamat();
        $agama = $this->getAgama();
        $this->_mode = 'update';
        
        $this->id = $id;
        $dokter = array('id'=>$id,'nama'=>$nama,'golongan'=>$golongan,'alamat'=>$alamat,'agama'=>$agama);
        $this->save($dokter);
    }
    
    function deletedokter() {
        $id = $this->getId();        
        $this->id = $id;
        
        $this->delete();
    }
}