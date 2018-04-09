<?php
class Sessions {
    private $link;
   
    function sess_open($savePath, $sessionName)
    {
        $link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        if($link){
            $this->link = $link;
            return true;
        }else{
            return false;
        }
    }
    function sess_close()
    {
        mysqli_close($this->link);
        return true;
    }
    function sess_read($id)
    {
        $result = mysqli_query($this->link,"SELECT Session_Data FROM Session WHERE Session_Id = '".$id."' AND Session_Expires > '".date('Y-m-d H:i:s')."'");
        if($row = mysqli_fetch_assoc($result)){
            return $row['Session_Data'];
        }else{
            return "";
        }
    }
    function sess_write($id, $data)
    {var_dump('hallo');
        $DateTime = date('Y-m-d H:i:s');
        $NewDateTime = date('Y-m-d H:i:s',strtotime($DateTime.' + 1 hour'));
        $result = mysqli_query($this->link,"REPLACE INTO Session SET Session_Id = '".$id."', Session_Expires = '".$NewDateTime."', Session_Data = '".$data."'");
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function sess_destroy($id)
    {
        $result = mysqli_query($this->link,"DELETE FROM Session WHERE Session_Id ='".$id."'");
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function sess_gc($maxlifetime)
    {
        $result = mysqli_query($this->link,"DELETE FROM Session WHERE ((UNIX_TIMESTAMP(Session_Expires) + ".$maxlifetime.") < ".$maxlifetime.")");
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>