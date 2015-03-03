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
                    session_start();
                    $_SESSION["uname"]=$row['username'];
                    $_SESSION["type"]=$row{'type'};
                    header("location:admin.php");
                }
                else if($row['type']=="staff"){
                    session_start();
                    $_SESSION["uname"]=$row['username'];
                    $_SESSION["type"]=$row{'type'};
                    header("location:staff.php");
                }
                else if($row['type']=="student"){
                    session_start();
                    $_SESSION["uname"]=$row['username'];
                    $_SESSION["type"]=$row{'type'};
                    header("location:dashboard.php");
                }
                else{
                    echo "invalid user";
                    header("Refresh:1,index.php");
                }
            }
            else{
                echo "Invalid UserName or password";
                header("Refresh:1,index.php");
            }
        }
        else
        {
            echo $conn->error;
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