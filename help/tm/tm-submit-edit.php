<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('number','start','end','time');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $number=safeString($dbconnection,$_POST['number']);
        $start=safeString($dbconnection,$_POST['start']);
        $end=safeString($dbconnection,$_POST['end']);
        $time=safeString($dbconnection,$_POST['time']);

        $query= "update tm_bus_route set start_location=".$start.", end_location=".$end.", start_time='".$time."' where route_number=".$number;

        $result=mysqli_query($dbconnection,$query);
        if($result){
            header("location:tm-manage-routes.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
        }
    }
}else{
    echo "not_enough_data";
}

