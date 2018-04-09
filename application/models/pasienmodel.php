<?php
class PasienModel extends AfiModel
{
    protected $table_name = 'tb_pasien';
    
    /*
        Initiate the field
    */
    private $_noktp;
    private $_id = '';
    private $_nama;
    private $_alamat;
    private $_agama;
    
    function setId($id){
        $this->_id = $id;
    }
    
    function setNama($nama){
        $this->_nama = $nama;
    }
    
    function setNoKTP($ktp){
        $this->_noktp = $ktp;
    }
    
    function setAlamat($alamat){
        $this->_alamat = $alamat;
    }
    
    function setAgama($agama) {
        $this->_agama = $agama;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function getNama(){
        return $this->_nama;
    }
    
    function getNoKTP(){
        return $this->_noktp;
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
        $ktp = $this->getNoKTP();
        $id = $this->getId();
        $nama = $this->getNama();        
        $alamat = $this->getAlamat();
        $agama = $this->getAgama();
        $this->_mode = 'insert';
        
        $pasien = array($id,$nama,$alamat,$agama,$ktp);
        $this->save($pasien);
    }
    
    function saveedit() {
        $ktp = $this->getNoKTP();
        $id = $this->getId();
        $nama = $this->getNama();
        $alamat = $this->getAlamat();
        $agama = $this->getAgama();
        $this->_mode = 'update';
        
        $this->id = $id;
        $pasien = array('id'=>$id,'nama'=>$nama,'noktp'=>$ktp,'alamat'=>$alamat,'agama'=>$agama);
        $this->save($pasien);
    }
    
    function deletepasien() {
        $id = $this->getId();        
        $this->id = $id;
        
        $this->delete();
    }
}