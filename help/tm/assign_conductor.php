<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('number','conductor');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $number=safeString($dbconnection,$_POST['number']);
        $conductor=safeString($dbconnection,$_POST['conductor']);

        $query= "update tm_vehicle_details set conductor=".$conductor." where number='".$number."'";

        $result=mysqli_query($dbconnection,$query);
        if($result){
            echo "success";
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
        }
    }
}else{
    echo "not_enough_data";
}

