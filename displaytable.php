<?php
    function printtable($tablename){
        require('praveenlib.php');
        require('datas.php');
        if($conn = connectSQL($dbdetails)) {
            if($tablename=="staff"){
                $sql="select staffid,staffname,currentpos,classhandled from staff";
                if ($rs = $conn->query($sql)) {
                    $count=$rs->num_rows;
                    while($count>0) {
                        $row = $rs->fetch_array();
                        echo "<tr><td>".$row['staffid']."</td><td>".$row['staffname']."</td><td>".$row['currentpos']."</td><td>".$row['classhandled']."</td><td><button value='".$row['staffid']."' class='btn btn-primary btnedit'><span class='glyphicon glyphicon-pencil'></span> Edit</button><button value='".$row['staffid']."' class='btn btn-primary btnremoves'><span class='glyphicon glyphicon-remove'></span> Remove</button></td></tr>";
                        $count--;
                    }
                }
                else{
                    echo "unable to query";
                }
            }
            else if($tablename=="student"){
                $sql="select admissionnum,regno,name,course from studentdetails";
                if ($rs = $conn->query($sql)) {
                    $count=$rs->num_rows;
                    while($count>0) {
                        $row = $rs->fetch_array();
                        echo "<tr><td>".$row['admissionnum']."</td><td>".$row['name']."</td><td>".$row['regno']."</td><td>".$row['course']."</td><td><button value='".$row['admissionnum']."' class='btn btn-primary btnedit'><span class='glyphicon glyphicon-pencil'></span> Edit</button><button value='".$row['admissionnum']."' class='btn btn-primary btnedit'><span class='glyphicon glyphicon-remove'></span> Remove</button></td></tr>";
                        $count--;
                    }
                }
                else{
                    echo "unable to query";
                }
            }
            else{
                echo "Unable to fetch Database";
            }
        }
        else{
            echo "unable to connect";
            header("Refresh:5,admin.php");
        }
    }
?>