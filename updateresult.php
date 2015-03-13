<?php
require_once("praveenlib.php");
require_once("datas.php");
$keys = array('regno','semester','sub1','mark1','sub2','mark2','sub3','mark3','sub4','mark4','sub5','mark5','sub6','mark6');
if(checkPOST($keys))
{
    if($conn = connectSQL($dbdetails)){
        $sql1 = "UPDATE result set grade='".$_POST['mark1']."' where regno='".$_POST['regno']."' and semester=".$_POST['semester']." and subcode='".$_POST['sub1']."'";
        $sql2 = "UPDATE result set grade='".$_POST['mark2']."' where regno='".$_POST['regno']."' and semester=".$_POST['semester']." and subcode='".$_POST['sub2']."'";
        $sql3 = "UPDATE result set grade='".$_POST['mark3']."' where regno='".$_POST['regno']."' and semester=".$_POST['semester']." and subcode='".$_POST['sub3']."'";
        $sql4 = "UPDATE result set grade='".$_POST['mark4']."' where regno='".$_POST['regno']."' and semester=".$_POST['semester']." and subcode='".$_POST['sub4']."'";
        $sql5 = "UPDATE result set grade='".$_POST['mark5']."' where regno='".$_POST['regno']."' and semester=".$_POST['semester']." and subcode='".$_POST['sub5']."'";
        $sql6 = "UPDATE result set grade='".$_POST['mark6']."' where regno='".$_POST['regno']."' and semester=".$_POST['semester']." and subcode='".$_POST['sub6']."'";
        if($rs1=$conn->query($sql1) && $rs2=$conn->query($sql2) && $rs3=$conn->query($sql3) && $rs4=$conn->query($sql4) && $rs5=$conn->query($sql5) && $rs6=$conn->query($sql6))
        {
            echo "Update Successful";
            header("Refresh:2,studresults.php");
        }
        else
        {
            echo "Insertion Error";
            header("Refresh:2,editresult.php?reg=".$_POST['regno']."&sem=".$_POST['semester']);
        }
    }
    else{
        echo "unable to connect";
        header("Refresh:1,editresult.php");
    }
}
else
{
    echo "Invalid Parameters";
    header("Refresh:1,editresult.php");
}
?>
