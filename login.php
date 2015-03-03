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
                    header("location:admin.php");
                    session_start();
                    $_SESSION["uname"]=$row['username'];
                    $_SESSION["type"]=$row{'type'};
                }
                else{
                    header("location:index.php");
                }
            }
            else{
                echo "Invalid UserName or password";
                header("Refresh:1,index.php");
            }
        }
        else
        {
            $conn->error;
        }
    }
    else{
        echo "unable to connect";
        header("Refresh:1,index.php");
    }
}
else
{
    header("Refresh:3,index.php");
}
?>