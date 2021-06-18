<?php
session_start();
include_once 'dbh.inc.php';
$host_name = $_POST['host_name'];    
$_SESSION['c_host'] = $host_name;
$date = $_POST['date'];    
$type = $_POST['type'];    
$attendees = $_POST['attendees'];    
    $sql = "INSERT INTO conversations(host_name, date, type, attendees) 
    VALUES ('$host_name','$date','$type','$attendees')";
    mysqli_query($conn, $sql);
    $last_id = mysqli_insert_id($conn);
    $_SESSION['conv_ID']=$last_id;
  //  echo $last_id;
  //  echo $_SESSION['conv_ID'];
header("Location: ../vision_add.php"); // bring us to the page listed here
?>
