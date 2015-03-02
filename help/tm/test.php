<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('number');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $number=safeString($dbconnection,$_POST['number']);

        $query= "select * from tm_bus_route where route_number=".$number;
        $result= mysqli_query($dbconnection,$query);

        if($result)
        {
            $row = mysqli_fetch_array($result);
            echo $row['start_location'];
        }
        else
        {
            echo "Failed db connctn";
        }
    }
}
