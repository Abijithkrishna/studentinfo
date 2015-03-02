<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array("name",'number','routenumber','distance','eta');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {
        $name=safeString($dbconnection,$_POST['name']);
        $number=safeString($dbconnection,$_POST['number']);
        $routenumber=safeString($dbconnection,$_POST['routenumber']);
        $distance=safeString($dbconnection,$_POST['distance']);
        $eta=safeString($dbconnection,$_POST['eta']);

        $query= "update tm_bus_stop set name='".$name."',route=".$routenumber.",distance=".$distance.
            ",estimated_time='".$eta."'where id=".$number;

        if($dbconnection->query($query)){
            header("location:tm-manage-stop.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
        }
    }
}else{
    echo "not_enough_data";
}

