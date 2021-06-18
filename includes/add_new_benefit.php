<?php
session_start();
$this_vision = $_SESSION['v_ID'];
echo $this_vision;
include_once 'dbh.inc.php';
$ben_title = $_POST['ben_title']; 
$_SESSION['this_ben'] = $ben_title;
$ben_short_des = $_POST['ben_short_des'];    
$ben_long_des = $_POST['ben_long_des']; 
echo   $ben_title;
echo $ben_short_des;
echo   $ben_long_des;  
    $sql = "INSERT INTO benefits(ben_title, ben_short_des, ben_long_des, vision_ID) 
    VALUES ('$ben_title','$ben_short_des','$ben_long_des','$this_vision')";
    mysqli_query($conn, $sql);
    
header("Location: ../benefit_add.php"); // back to the benefit add page
?>
