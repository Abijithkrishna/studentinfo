<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys=array('id','route','stop');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $id=safeString($dbconnection,$_POST['id']);
        $route=safeString($dbconnection,$_POST['route']);
        $stop=safeString($dbconnection,$_POST['stop']);


        $query= "update tm_student_details set route=".$route." ,stop=".$stop." where id=".$id;
        $result=mysqli_query($dbconnection,$query);
        if($result){
            header("location:tm-manage-passenger.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
        }
    }
}else{
    echo "not_enough_data";
}

