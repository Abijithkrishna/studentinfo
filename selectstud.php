<?php
    function dispadd($add){
        foreach ($add as $value) {
            echo "{$value}<br/>";
        }
    }
    function display($id){
        require('praveenlib.php');
        require('datas.php');
        if($conn = connectSQL($dbdetails)) {
            $sql = "select * from studentdetails where regno='" .$id. "' limit 1";
            if ($rs = $conn->query($sql)) {
                $count=$rs->num_rows;
                if($count>0) {
                    $row = $rs->fetch_array();
                    $add=explode(',',$row["address"]);
                    echo '<h2 id="aboutheading">Student Details </h2><hr>';
                    echo '<table class="table table-bordered table-hover table-striped">';
                    echo "<thead><tr><th>Info</th><th>Value</th></tr></thead>";
                    echo '<tbody>';
                    echo '<tr><td>Name:</td><td>'.$row["name"].'</td></tr>';
                    echo '<tr><td>Admission Number:</td><td>'.$row["admissionnum"].'</td></tr>';
                    echo '<tr><td>Father Name:</td><td>'.$row["father"].'</td></tr>';
                    echo '<tr><td>Mother Name:</td><td>'.$row["mother"].'</td></tr>';
                    echo '<tr><td>Register Number:</td><td>'.$row["regno"].'</td></tr>';
                    echo '<tr><td>Birth date:</td><td>'.$row["dob"].'</td></tr>';
                    echo '<tr><td>Course:</td><td>'.$row["course"].'</td></tr>';
                    echo '<tr><td>Native:</td><td>'.$row["native"].'</td></tr>';
                    echo '<tr><td>Religion:</td><td>'.$row["religion"].'</td></tr>';
                    echo '<tr><td>Contact Address:</td><td>'; ?><?php dispadd($add) ?> <?php echo '</td></tr>';
                    echo '<tr><td>Contact Number:</td><td>'.$row["mobile"].'</td></tr>';
                    echo '<tr><td>Email address:</td><td>'.$row["email"].'</td></tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
                else{
                    echo "<br/> Invalid Register number";
                }
            }
            else{
                echo "unable to query";
                header("Refresh:5,dashboard.php");
            }
        }
        else{
            echo "unable to connect";
            header("Refresh:5,dashboard.php");
        }
    }
?>