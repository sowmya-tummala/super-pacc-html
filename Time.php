<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


<?php

error_reporting(0);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "slotbooking");

// Check connection
$select1 = mysqli_query($link, "SELECT * FROM `timeslot` ") or die('query failed');

if(mysqli_num_rows($select1) > 14){
    echo "<h2>SORRY , ALL SLOTS ARE BOOKED .</h2>";
}
else{
    $data = $_REQUEST['radios'];
    $select = mysqli_query($link, "SELECT * FROM `timeslot` WHERE time = '$data'") or die('query failed');
    if(mysqli_num_rows($select) > 0){
        echo "<h2>Slot was already booked<br>Please choose another one</h2>";
    }
    else{
        $sql = "INSERT INTO timeslot (time) VALUES ('$data')";
        if(mysqli_query($link, $sql)){
            echo "<h2>Your slot sucessfully booked at $data </h2>";
        } 
    }
}


mysqli_close($link);
?>
</body>
</html>
