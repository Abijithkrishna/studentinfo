<?php
require_once "praveenlib.php";
require_once "datas.php";

$keys = array('name','anum','fname','mname','rnum','dob','course','native','reli','addr','mobile','email');
if(checkPOST($keys)){
    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else
    {

        $admn=safeString($dbconnection,$_POST['anum']);
        $reg=safeString($dbconnection,$_POST['rnum']);
        $name=safeString($dbconnection,$_POST['name']);
        $dob=safeString($dbconnection,$_POST['dob']);
        $fname=safeString($dbconnection,$_POST['fname']);
        $mname=safeString($dbconnection,$_POST['mname']);
        $native=safeString($dbconnection,$_POST['native']);
        $religion=safeString($dbconnection,$_POST['reli']);
        $course=safeString($dbconnection,$_POST['course']);
        $addr=safeString($dbconnection,$_POST['addr']);
        $mob=safeString($dbconnection,$_POST['mobile']);
        $email=safeString($dbconnection,$_POST['email']);

        $query= "update studentdetails set name='".$name."',regno='".$reg."',dob='".$dob.
            "' ,father='".$fname."',mother='".$mname."',native='".$native."',religion='".$religion."',course='".$course."',address='".$addr."',mobile='".$mob."',email='".$email."' where admissionnum=".$admn;
        $result=mysqli_query($dbconnection,$query);
        if($result){
            echo "Record Updated";
            header("Refresh:1,managestudents.php");
        }else{
            echo "bd_error_1 ".mysqli_error($dbconnection);
            header("Refresh:1,managestudents.php");
        }
    }
}else{
    echo "not_enough_data";
    header("Refresh:1,managestudents.php");
}
