<?php
class buildUUID{    
    function  __construct(){
       // echo ("UUID 生成类<br/>");
    }
    
    public function create_guid() {
        $charid = strtoupper(md5(uniqid(mt_rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid,12, 4).$hyphen
        .substr($charid,16, 4).$hyphen
        .substr($charid,20,12);
//        .chr(125);// "}"
        return $uuid;
    }
}
?>
<?php 
//$obj = new buildUUID();
//$uuid = $obj->create_guid();
//echo ($uuid);
?>
