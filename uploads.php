<?php
require_once("praveenlib.php");
require_once("datas.php");

$keys = array("submit");

if(checkPOST($keys)){
    if($conn = connectSQL($dbdetails)){
        if ($_FILES['csv']['size'] > 0) {
            $info = pathinfo($_FILES['csv']['name']);
            $ext = $info['extension']; // get the extension of the file
            $newname = "staff.".$ext;

            $target = 'files/'.$newname;
            move_uploaded_file( $_FILES['csv']['tmp_name'], $target);

            //$file = $_FILES['csv']['name'];
            $handle = fopen("files/staff.csv","r");

            while ($data = fgetcsv($handle,1000,";","'")); {
                print_r($data);
                echo "hi";
                echo $data[0];
                if ($data[0]) {
                    echo "hi";
                    $rs = $conn->query("INSERT INTO staff(staffid,staffname,qualification,address,phone,currentpos,classhandled,email) VALUES
                (
                    '".addslashes($data[0])."',
                    '".addslashes($data[1])."',
                    '".addslashes($data[2])."',
                    '".addslashes($data[3])."',
                    '".addslashes($data[4])."',
                    '".addslashes($data[5])."',
                    '".addslashes($data[6])."',
                    '".addslashes($data[7])."'
                )
            ");
                    echo "hi";
                   $rs1 = $conn->query("Insert into users (username, password, type) values(
                    'staff".addslashes($data[0])."',
                    '".addslashes($data[1])."',
                    'staff'
            )");
                }
            }

            echo "Upload Successful";
            header("Refresh:10,addstaff.php");
        }
    }
    else{
        echo "Unable to connect to DB";
        header("Refresh:10,addstaff.php");
    }
}
else{
    echo "Not enough parameters";
    header("Refresh:10,addstaff.php");
}