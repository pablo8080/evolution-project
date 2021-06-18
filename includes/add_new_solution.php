<?php
session_start();
include_once 'dbh.inc.php';
$this_vision = $_SESSION['v_ID'];
$this_bar_title = $_SESSION['b_title'];
$this_bar_ID = $_SESSION['b_ID'];

$s_title = $_POST['s_title']; 
$s_short_des = $_POST['s_short_des'];    
$s_long_des = $_POST['s_long_des']; 

$sql = "INSERT INTO solutions(s_title, s_short_des, s_long_des, bar_ID) 
    VALUES ('$s_title','$s_short_des','$s_long_des','$this_bar_ID')";
    mysqli_query($conn, $sql);
    
header("Location: ../solution_add.php"); // back to the solution add page
?>
