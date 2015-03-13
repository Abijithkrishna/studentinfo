<?php

require_once "praveenlib.php";
$keys = array('name','email','subject','comment');

if(checkPOST($keys)){
    $to = "abijitharc@gmail.com";
    $from = "From: ".$_POST['email'];
    $message = $_POST['comment'];
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $name = $name ." Message: ".$message;
    mail($to,$subject,$name,$from);

    echo "<h3>Message Sent</h3>";
    header("Refresh:1,contact.php");
}
else{
    echo "not_enough_data";
    header("Refresh:1,contact.php");
}