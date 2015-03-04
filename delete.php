<?php
require_once "praveenlib.php";
require_once "datas.php";
if(isset($_POST['id'])){
    $db=connectSQL($dbdetails);
    $query="delete from studentdetails where admissionnum=".$_POST['id'];
    if($db->query($query)){
        $query="delete from users where password=".$_POST['id']."&& type='student'";
        if($db->query($query)){
            //echo "success";
        }else echo $db->error;
        echo "success";
    }else echo $db->error;
}else{
    echo "not enough data";
}
?>