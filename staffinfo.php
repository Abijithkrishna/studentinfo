<?php
    function dispadd($add){
        foreach ($add as $value) {
            echo "{$value}<br/>";
        }
    }
    function staffinfo($staffid){
        require_once("praveenlib.php");
        require_once("datas.php");
        if($conn = connectSQL($dbdetails)) {
            $sql = "select * from staff where staffid='" .substr($staffid,5,strlen($staffid)-1). "' limit 1";
            if ($rs = $conn->query($sql)) {
                $count=$rs->num_rows;
                if($count>0) {
                    $row = $rs->fetch_array();
                    $add=explode(',',$row["address"]);
                    $qual=explode(',',$row["qualification"]);
                    echo '<h2 id="aboutheading">'.$row["staffname"].'&apos;s Profile</h2><hr>';
                    echo '<table class="table table-bordered table-hover table-striped">';
                    echo "<thead><tr><th>Info</th><th>Value</th></tr></thead>";
                    echo '<tbody>';
                    echo '<tr><td>ID:</td><td>'.$row["staffid"].'</td></tr>';
                    echo '<tr><td>Name:</td><td>'.$row["staffname"].'</td></tr>';
                    echo '<tr><td>Qualification:</td><td>'; ?><?php dispadd($qual) ?> <?php echo '</td></tr>';
                    echo '<tr><td>Address:</td><td>'; ?><?php dispadd($add) ?> <?php echo '</td></tr>';
                    echo '<tr><td>Phone:</td><td>'.$row["phone"].'</td></tr>';
                    echo '<tr><td>Position:</td><td>'.$row["currentpos"].'</td></tr>';
                    if($row['currentpos']=="HOD"){
                        echo '<tr><td>HOD of Department:</td><td>'.$row["classhandled"].'</td></tr>';
                    }
                    else{
                        echo '<tr><td>Class Handled:</td><td>'.$row["classhandled"].'</td></tr>';
                    }
                    echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
                else{
                    echo "<br/> Staff Details not Found";
                }
            }
            else{
                echo "unable to query";
                header("Refresh:2,staff.php");
            }
        }
        else{
            echo "unable to connect";
            header("Refresh:2,staff.php");
        }
    }
?>