<?php
require_once("praveenlib.php");
require_once("datas.php");
$keys = array('id','name','qual','addr','phn','pos','class','email');
if(checkPOST($keys))
{
    if($conn = connectSQL($dbdetails)){
        $sql = "INSERT INTO staff(staffid,staffname,qualification,address,phone,currentpos,classhandled,email) VALUES (".$_POST['id'].",'".$_POST['name']."','".$_POST['qual']."'
        ,'".$_POST['addr']."','".$_POST['phn']."','".$_POST['pos']."','".$_POST['class']."','".$_POST['email']."')";
        if($rs=$conn->query($sql))
        {
            echo "Record Inserted<br>";
            $sql1 = "INSERT into users(username,password,type) VALUES ('staff".$_POST['id']."','".$_POST['name']."','staff')";
            if($rs1=$conn->query($sql1)){
                echo "user added";
            }
            else{
                echo "ask admin to add user";
            }
            header("Refresh:2,addstaff.php");
        }
        else
        {
            echo "Insertion Error";
            echo $conn->error;
            header("Refresh:2,addstaff.php");
        }
    }
    else{
        echo "unable to connect";
        header("Refresh:1,addstaff.php");
    }
}
else
{
    echo "error";
    header("Refresh:1,addstaff.php");
}
?>