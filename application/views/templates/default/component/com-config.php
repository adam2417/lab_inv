<?php
$config=$database->get('tb_config','*',['config_id'=>'PROJECT_NAME']);
$company = $database->get('tb_config','*',['config_id'=>'COMPANY']);

function fungsi_hari() {
    $array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
    $hari = $array_hari[date("N")];
    return $hari;
}