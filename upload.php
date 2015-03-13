<?php
require_once("praveenlib.php");
require_once("datas.php");

$keys = array("submit");

if(checkPOST($keys)){
    if($conn = connectSQL($dbdetails)){
        if ($_FILES[csv][size] > 0) {
            $info = pathinfo($_FILES['csv']['name']);
            $ext = $info['extension']; // get the extension of the file
            $newname = "student.".$ext;

            $target = 'files/'.$newname;
            move_uploaded_file( $_FILES['csv']['tmp_name'], $target);

            //$file = $_FILES['csv']['name'];
            $handle = fopen("files/student.csv","r");

            while ($data = fgetcsv($handle,1000,";","'")); {
                if ($data[0]) {
                   $rs = $conn->query("INSERT INTO studentdetails(admissionnum, regno, name, dob, father, mother, native, religion, course, address, mobile,email) VALUES
                (
                    '".addslashes($data[1])."',
                    '".addslashes($data[4])."',
                    '".addslashes($data[0])."',
                    '".addslashes($data[5])."',
                    '".addslashes($data[2])."',
                    '".addslashes($data[3])."',
                    '".addslashes($data[7])."',
                    '".addslashes($data[8])."',
                    '".addslashes($data[6])."',
                    '".addslashes($data[9])."',
                    '".addslashes($data[10])."',
                    '".addslashes($data[11])."'
                )
            ");
                   $rs1 = $conn->query("Insert into users (username, password, type) values(
                    '".addslashes($data[4])."',
                    '".addslashes($data[1])."',
                    'student'
            )");
                }
            }

            echo "Upload Successful";
            header("Refresh:1,addstudents.php");
        }
    }
    else{
        echo "Unable to connect to DB";
        header("Refresh:1,addstudents.php");
    }
}
else{
    echo "Not enough parameters";
    header("Refresh:1,addstudents.php");
}