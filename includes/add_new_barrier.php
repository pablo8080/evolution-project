<?php
session_start();
include_once 'dbh.inc.php';
$this_vision = $_SESSION['v_ID'];
$bar_title = $_POST['bar_title']; 
$_SESSION['bar_title'] = $bar_title;

$bar_short_des = $_POST['bar_short_des'];    
$bar_long_des = $_POST['bar_long_des'];  

$sql = "INSERT INTO barriers(bar_title, bar_short_des, bar_long_des, vision_ID) 
    VALUES ('$bar_title','$bar_short_des','$bar_long_des','$this_vision')";
    mysqli_query($conn, $sql);
    
header("Location: ../barrier_add.php"); // back to the barrier add page
?>
