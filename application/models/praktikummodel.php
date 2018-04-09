<?php
class PraktikumModel extends AfiModel
{
    protected $table_name = 'tb_praktikum';
    
    /*
        Initiate the field
    */
    private $_id = '';
    private $_hari;
    private $_jam;
    private $_jenis;
    private $_inventaris;
    
    function setId($id){
        $this->_id = $id;
    }
    
    function setHari($hari){
        $this->_hari = $hari;
    }
    
    function setJam($jam){
        $this->_jam = $jam;
    }
    
    function setJenis($jenis){
        $this->_jenis = $jenis;
    }
    
    function setInventaris($inventaris) {
        $this->_inventaris = $inventaris;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function getHari(){
        return $this->_hari;
    }
    
    function getJam(){
        return $this->_jam;
    }
    
    function getJenis(){
        return $this->_jenis;
    }
    
    function getInventaris(){
        return $this->_inventaris;
    }
    
    function __construct(){
        parent::__construct();
        $this->hasOne = array('inventaris'=>'tb_inventaris');
    }
    
    function savenew(){
        $id = $this->getId();
        $hari = $this->getHari();
        $jam = $this->getJam();
        $jenis = $this->getJenis();
        $inventaris = $this->getInventaris();
        $this->_mode = 'insert';
        
        $selected_hour = date('Y-m-d H:i:s', strtotime($jam));
        $praktikum = array($id,$hari,$selected_hour,$jenis,$inventaris);
        $this->save($praktikum);
    }
    
    function saveedit() {
        $id = $this->getId();
        $hari = $this->getHari();
        $jam = $this->getJam();
        $jenis = $this->getJenis();
        $inventaris = $this->getInventaris();
        $this->_mode = 'update';
        
        $selected_hour = date('Y-m-d H:i:s', strtotime($jam));
        
        $this->id = $id;
        $praktikum = array('id'=>$id,'hari'=>$hari,'jam'=>$selected_hour,'jenis'=>$jenis,'idinventaris'=>$inventaris);
        $this->save($praktikum);
    }
    
    function deletepraktikum() {
        $id = $this->getId();        
        $this->id = $id;
        
        $this->delete();
    }
}