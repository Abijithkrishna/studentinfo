<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('number','type','capacity','condition','status');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $number=safeString($dbconnection,$_POST['number']);
        $type=safeString($dbconnection,$_POST['type']);
        $capcity=safeString($dbconnection,$_POST['capacity']);
        $condition=safeString($dbconnection,$_POST['condition']);
        $status=safeString($dbconnection,$_POST['status']);
        $query= "update tm_vehicle_details set type=".$type.",capacity=".$capcity.",vehicle_condition='"
            .$condition."',vehicle_status='".$status."' where number='".$number."'";

        if($dbconnection->query($query)){
            header("location:tm-manage-vehicles.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
        }
    }
}else{
    echo "not_enough_data";
}

