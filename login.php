<?php
require_once("praveenlib.php");
require_once("datas.php");

$keys = array('username','password');
if(checkPOST($keys))
{
    if($conn = connectSQL($dbdetails)){
        $sql= "select username,password,type from users where username='".$_POST['username']."' && password='".$_POST['password']."' limit 1";
        if($rs=$conn->query($sql))
        {

            $count=$rs->num_rows;
            if($count>0){
                $row=$rs->fetch_array();
                if($row['type']=='admin')
                {
                    header("location:dashboard.php");
                }
                else{
                    header("location:index.php");
                }
            }
            else{
                echo "hi";
            }
        }
        else
        {
            $conn->error;
        }
    }
    else{
        echo "unable to connect";
        header("Refresh:3,index.php");
    }
}
else
{
    header("Refresh:3,index.php");
}
?>