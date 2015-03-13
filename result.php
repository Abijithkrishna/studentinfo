<?php
require_once("praveenlib.php");
require_once("datas.php");
$keys = array('regno','semester','sub1','mark1','sub2','mark2','sub3','mark3','sub4','mark4','sub5','mark5','sub6','mark6');
if(checkPOST($keys))
{
    if($conn = connectSQL($dbdetails)){
        $sql ="select grade from result WHERE regno='".$_POST['regno']."' and semester=".$_POST['semester'];
        if($rs= $conn->query($sql)){
            if($rs->num_rows > 0){
                echo "Marks Inserted Already, Edit them using edit option";
                header("Refresh:2,studresults.php");
            }
            else{

                $sql1 = "INSERT INTO result(regno, semester, subcode, grade) VALUES ('".$_POST['regno']."',".$_POST['semester'].",'".$_POST['sub1']."','".$_POST['mark1']."')";
                $sql2 = "INSERT INTO result(regno, semester, subcode, grade) VALUES ('".$_POST['regno']."',".$_POST['semester'].",'".$_POST['sub2']."','".$_POST['mark2']."')";
                $sql3 = "INSERT INTO result(regno, semester, subcode, grade) VALUES ('".$_POST['regno']."',".$_POST['semester'].",'".$_POST['sub3']."','".$_POST['mark3']."')";
                $sql4 = "INSERT INTO result(regno, semester, subcode, grade) VALUES ('".$_POST['regno']."',".$_POST['semester'].",'".$_POST['sub4']."','".$_POST['mark4']."')";
                $sql5 = "INSERT INTO result(regno, semester, subcode, grade) VALUES ('".$_POST['regno']."',".$_POST['semester'].",'".$_POST['sub5']."','".$_POST['mark5']."')";
                $sql6 = "INSERT INTO result(regno, semester, subcode, grade) VALUES ('".$_POST['regno']."',".$_POST['semester'].",'".$_POST['sub6']."','".$_POST['mark6']."')";
                if($rs1=$conn->query($sql1) && $rs2=$conn->query($sql2) && $rs3=$conn->query($sql3) && $rs4=$conn->query($sql4) && $rs5=$conn->query($sql5) && $rs6=$conn->query($sql6))
                {
                    echo "Insertion Successful";
                    header("Refresh:2,studresults.php");
                }
                else
                {
                    echo "Insertion Error";
                    header("Refresh:2,studresults.php");
                }
            }
        }else{
            echo "unable to search";
            header("Refresh:1,studresults.php");
        }
    }
    else{
        echo "unable to connect";
        header("Refresh:1,studresults.php");
    }
}
else
{
    echo "error";
    header("Refresh:1,studresults.php");
}
?>
