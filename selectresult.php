<?php
function display($id){
    require('praveenlib.php');
    require('datas.php');
    if($conn = connectSQL($dbdetails)) {
        $sql = "select * from result where regno='" .$id. "' group by semester";
        if ($rs = $conn->query($sql)) {
            $count=$rs->num_rows;
            echo '<h2 id="aboutheading">Results</h2><hr>';
            if($count>0) {
                while ($count > 0) {
                    $sql = "select * from result where regno='" . $id . "' && semester=" . $count;
                    if ($rs1 = $conn->query($sql)) {
                        echo '<h5 id="aboutheading">semester:' . $count . '</h5>';
                        echo '<table class="table table-bordered table-hover table-striped">';
                        echo "<thead><tr><th>Subject</th><th>Grade</th></tr></thead>";
                        echo '<tbody>';
                        while ($row = $rs1->fetch_array()) {
                            echo "<tr><td>" . $row['subcode'] . "</td><td>" . $row['grade'] . "</td></tr>";
                        }
                        echo '</tbody>';
                        echo '</table>';
                        $count--;
                    }
                }
            }
            else{
                echo "<br/> No Results Till Now!";
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