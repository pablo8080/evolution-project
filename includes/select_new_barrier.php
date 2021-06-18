<?php
session_start();
$_SESSION['b_ID'] = $_POST['b_ID'];
//$_SESSION['b_title'] = $_POST['b_title']; 
//echo   $_SESSION['b_title']; 
header("Location: ../barrier_details.php"); // open barrier details page
?>
