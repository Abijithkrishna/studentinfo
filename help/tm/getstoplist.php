<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('route');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $route=safeString($dbconnection,$_POST['route']);

        $query= "select * from tm_bus_stop where route_number=".$route;
        $result= mysqli_query($dbconnection,$query);

        if($result)
        {
            $row = mysqli_fetch_array($result);
            $data = array(
                ''
            );
            echo $row['start_location'];
        }
        else
        {
            echo "Failed db connctn";
        }
    }
}
