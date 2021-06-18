<?php
session_start();
include_once 'includes/dbh.inc.php';
?>

<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Add Conversation</title>
</head>
<body>
	<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
    <div class="navbar"></div><br>
    <center><p><i>Thank you for uploading conversation <b><?php echo $_SESSION['conv_ID'];?></b>.</p></center>
    <center><p>The details are listed below. </p>
        <p>Click here to generate an image file to add to the forum</p></center>
        <center><a href='conv_summary.php'><button>Generate image file</button></a></center>


        
         
</body>
</html>
