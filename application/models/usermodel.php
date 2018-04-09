<?php
class UserModel extends AfiModel
{
    protected $table_name = 'tb_adminlogin';
    
    private $userd,$password;
    
    function setUserId($uId){
        $this->userd = $uId;
    }
    
    function setPassword($pass){
        $this->password = $pass;
    }
    
    function getUserId(){
        return $this->userd;
    }
    
    function getPassword(){
        return $this->password;
    }
    
    function isLogin() {
        $this->hasOne = array('pegawai'=>'tb_pegawai');
        $this->whereArray(array('userid' => $this->getUserId(),
                         'pass' => $this->getPassword()));
        $this->showHasOne();
        return $this->search();
    }
}