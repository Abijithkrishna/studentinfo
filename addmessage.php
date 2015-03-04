<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys = array('msg');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {
        $query= "insert into alerts(message) VALUES ('".$_POST['msg']."')";
        $result=mysqli_query($dbconnection,$query);
        if($result){
            echo "Record Updated";
            header("Refresh:1,alerts.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
            header("Refresh:1,alerts.php");
        }
    }
}else{
    echo "not_enough_data";
    header("Refresh:1,alerts.php");
}
