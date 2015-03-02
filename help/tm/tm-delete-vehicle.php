<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($_POST['number'])){
    $db=connectSQL($dbdetails);
    $query="delete from tm_vehicle_details where number='".$_POST['number']."'";
    if($db->query($query)){
        echo "success";
    }else echo $db->error;
}else{
    echo "not enough data";
}
?>