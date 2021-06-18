<?php
session_start();
$_SESSION['v_ID'] =$_POST['v_ID'];
header("Location: ../vision_details.php"); // open vision details page
?>
