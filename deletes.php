<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($_POST['id'])){
    $db=connectSQL($dbdetails);
    $query="delete from staff where staffid=".$_POST['id'];
    if($db->query($query)){
        $query1="delete from users where username='staff".$_POST['id']."'";
        if($db->query($query1)){
            //echo "success";
        }else echo $db->error;
        echo "success";
    }else echo $db->error;
}else{
    echo "not enough data";
}
?>