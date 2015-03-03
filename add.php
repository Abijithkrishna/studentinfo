<?php
require_once("praveenlib.php");
require_once("datas.php");
$keys = array('name','anum','fname','mname','rnum','dob','course','native','reli','addr','mobile','email');
if(checkPOST($keys))
{
    if($conn = connectSQL($dbdetails)){
        $sql = "INSERT INTO studentdetails(admissionnum, regno, name, dob, father, mother, native, religion, course, address, email, mobile) VALUES (
                ".$_POST['anum'].",'".$_POST['rnum']."','".$_POST['name']."','".$_POST['dob']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['native']."','".$_POST['reli']."','".$_POST['course']."','".$_POST['addr']."','".$_POST['mobile']."','".$_POST['email']."')";
        if($rs=$conn->query($sql))
        {
            echo "Record Inserted";
            $sql1 = "INSERT into users(username,password,type) VALUES ('".$_POST['rnum']."',".$_POST['anum'].",'student')";
            if($rs1=$conn->query($sql1)){
                echo "user added";
            }
            else{
                echo "\n ask admin to add user";
            }
            header("Refresh:1,addstudents.php");
        }
        else
        {
            echo "Insertion Error";
            echo $conn->error;
            header("Refresh:2,addstudents.php");
        }
    }
    else{
        echo "unable to connect";
        header("Refresh:1,addstudents.php");
    }
}
else
{
    echo "error";
    header("Refresh:1,addstudents.php");
}
?>