<?php
class PemeriksaanModel extends AfiModel
{
    protected $table_name = 'tb_pemeriksaan';
    
    private $_id = '',$_tglPeriksa,$_pasien,$_dokter,$_praktikum,$_hasil,$_pegawai;
    
    function setId($id){
        $this->_id = $id;
    }
    
    function setTglPeriksa($tglperiksa){
        $this->_tglPeriksa = $tglperiksa;
    }
    
    function setPasien($pasien){
        $this->_pasien = $pasien;
    }
    
    function setDokter($dokter){
        $this->_dokter = $dokter;
    }
    
    function setPraktikum($praktikum){
        $this->_praktikum = $praktikum;
    }
    
    function setHasil($hasil){
        $this->_hasil = $hasil;
    }
    
    function setPegawai($pegawai){
        $this->_pegawai = $pegawai;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function getTglPeriksa(){
        return $this->_tglPeriksa;
    }
    
    function getPasien(){
        return $this->_pasien;
    }
    
    function getDokter(){
        return $this->_dokter;
    }
    
    function getPraktikum(){
        return $this->_praktikum;
    }
    
    function getHasil(){
        return $this->_hasil;
    }
    
    function getPegawai(){
        return $this->_pegawai;
    }
    
    function __construct(){
        parent::__construct();
        $this->hasOne = array('praktikum'=>'tb_praktikum','pasien'=>'tb_pasien','dokter'=>'tb_dokter','pegawai'=>'tb_pegawai');
        $this->hasMany = array('praktikum'=>'tb_praktikum','pasien'=>'tb_pasien','dokter'=>'tb_dokter','pegawai'=>'tb_pegawai');
    }
    
    function savenew(){
        $id = $this->getId();
        $tglperiksa = date('Y-m-d',strtotime($this->getTglPeriksa()));
        $pasien = $this->getPasien();
        $dokter = $this->getDokter();
        $praktikum = $this->getPraktikum();
        $hasil = $this->getHasil();
        $pegawai = $this->getPegawai();
        $this->_mode = 'insert';
        
        $pemeriksaan = array($id,$tglperiksa,$pasien,$dokter,$praktikum,$hasil,$pegawai);
        $this->save($pemeriksaan);
    }
    
    function saveedit() {
        $id = $this->getId();
        $tglperiksa = date('Y-m-d',strtotime($this->getTglPeriksa()));
        $pasien = $this->getPasien();
        $dokter = $this->getDokter();
        $praktikum = $this->getPraktikum();
        $hasil = $this->getHasil();
        $pegawai = $this->getPegawai();
        $this->_mode = 'update';
        
        $this->id = $id;
        $pemeriksaan = array('id'=>$id,'tglperiksa'=>$tglperiksa,'idpasien'=>$pasien,'iddokter'=>$dokter,'idpraktikum'=>$praktikum,
                            'hasil'=>$hasil,'idpegawai'=>$pegawai);
        $this->save($pemeriksaan);
    }
    
    function deletepemeriksaan() {
        $id = $this->getId();        
        $this->id = $id;
        
        $this->delete();
    }
    
    function customPemeriksaan() {
        $qString = "
            SELECT * FROM tb_pemeriksaan Pemeriksaan
            LEFT JOIN tb_praktikum Praktikum ON Pemeriksaan.idpraktikum = Praktikum.id
            LEFT JOIN tb_pasien Pasien ON Pemeriksaan.idpasien = Pasien.id
            LEFT JOIN tb_dokter Dokter ON Pemeriksaan.iddokter = Dokter.id
            LEFT JOIN tb_pegawai Pegawai ON Pemeriksaan.idpegawai = Pegawai.id
            LEFT JOIN tb_inventaris Inventaris ON Praktikum.idinventaris = Inventaris.id
        ";
        $res = $this->custom($qString);
        return $res;
    }
}