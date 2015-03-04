<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys = array('id','name','qual','addr','phn','pos','class','email');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $id=safeString($dbconnection,$_POST['id']);
        $name=safeString($dbconnection,$_POST['name']);
        $qual=safeString($dbconnection,$_POST['qual']);
        $pos=safeString($dbconnection,$_POST['pos']);
        $class=safeString($dbconnection,$_POST['class']);
        $addr=safeString($dbconnection,$_POST['addr']);
        $mob=safeString($dbconnection,$_POST['phn']);
        $email=safeString($dbconnection,$_POST['email']);

        $query= "update staff set staffname='".$name."',qualification='".$qual."',address='".$addr."',phone='".$mob."',currentpos='".$pos."',classhandled='".$class."',email='".$email."' where staffid=".$id;
        $result=mysqli_query($dbconnection,$query);
        if($result){
            echo "Record Updated";
            header("Refresh:1,managestaff.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
            header("Refresh:1,managestaff.php");
        }
    }
}else{
    echo "not_enough_data";
    header("Refresh:1,managestaff.php");
}
