<?php
session_start();
$this_conv = $_SESSION['conv_ID'];
//echo $this_conv;
include_once 'dbh.inc.php';
$v_title = $_POST['v_title'];    
$v_short_des = $_POST['v_short_des'];    
$v_long_des = $_POST['v_long_des'];    
$v_topic = $_POST['v_topic'];    
    $sql = "INSERT INTO visions(v_title, v_short_des, v_long_des, v_topic, conv_ID) 
    VALUES ('$v_title','$v_short_des','$v_long_des','$v_topic', '$this_conv')";
    mysqli_query($conn, $sql);
header("Location: ../vision_add.php"); // bring us to the page listed here
?>