<?php
function printtable($tablename){
    require('praveenlib.php');
    require('datas.php');
    if($conn = connectSQL($dbdetails)) {
            $sql="select msgid,message from alerts";
            if ($rs = $conn->query($sql)) {
                $count=$rs->num_rows;
                while($count>0) {
                    $row = $rs->fetch_array();
                    echo "<tr><td>".$row['message']."</td><td><button value='".$row['msgid']."' class='btn btn-primary msgedit'><span class='glyphicon glyphicon-pencil'></span> Edit</button> <button value='".$row['msgid']."' class='btn btn-primary msgremove'><span class='glyphicon gylphicon-remove'></span> Remove</button>";
                    $count--;
                }
            }
            else{
                echo "unable to query";
            }
    }
    else{
        echo "unable to connect";
        header("Refresh:2,alerts.php");
    }
}
?>