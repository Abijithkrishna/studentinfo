<?php
require_once("praveenlib.php");
require_once("datas.php");
    function display($id){
        if($conn = connectSQL($dbdetails)) {
            $sql = "select * from studentdetails where regno='" .$id. "' limit 1";
            if ($rs = $conn->query($sql)) {
                $count=$rs->num_rows;
                if($count>0) {
                    $row = $rs->fetch_array();
                    echo '<table class="table table-bordered table-hover table-striped">';
                    echo "<thead><tr><th>Info</th><th>Value</th></tr></thead>";

                    echo '</table>';
                }
                else{
                    echo "<br/> Invalid Register number";
                }
            }
            else{
                echo "unable to query";
                header("Refresh:1,dashboard.php");
            }
        }
        else{
            echo "unable to connect";
            header("Refresh:1,dashboard.php");
        }
    }
?>