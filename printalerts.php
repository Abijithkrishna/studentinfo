<?php
require('praveenlib.php');
require('datas.php');
if($conn = connectSQL($dbdetails)) {
    $sql="select msgid,message from alerts";
    if ($rs = $conn->query($sql)) {
        $count=$rs->num_rows;
        $active=0;
        if($count>0){
            echo '<div class="carousel-inner" role="listbox">';
        while($count>0) {
            $row = $rs->fetch_array();
            if($active==0)
            {
                echo '<div class="item active"><center><h4 id="about">'.$row["message"].'</h4></center></div>';
                $active++;
            }
            else{
                echo '<div class="item"><center><h4 id="about">'.$row["message"].'</h4></center></div>';
            }
            //echo "<tr><td>".$row['message']."</td><td><button value='".$row['msgid']."' class='btn btn-primary msgedit'><span class='glyphicon glyphicon-pencil'></span> Edit</button> <button value='".$row['msgid']."' class='btn btn-primary msgremove'><span class='glyphicon gylphicon-remove'></span> Remove</button>";
            $count--;
        }
            echo '</div>';
        }
    }
    else{
        echo "unable to query";
    }
}
else{
    echo "unable to connect";
}
?>