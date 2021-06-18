<?php
include_once 'includes/dbh.inc.php';
session_start();
?>

<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Add Barriers</title>
</head>
<body>
<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
<div class="navbar"></div>  
 
    <center>
 <p><i>Conversation <?php echo $_SESSION['conv_ID']; ?></i></p>
 <p><i>Please add barriers to Vision ID: <b><?php echo $_SESSION['v_ID'];?><b> : <?php echo $_SESSION['v_title'];?><i></p>
 <p><i></i></p>
 </center>

<form action="includes/add_new_barrier.php" method="POST">
<table width="450px">
    <tr>
    <td valign="top"><label for="bar_title">Barrier Title</label></td>
    <td valign="top"><input  type="text" name="bar_title" maxlength="100" size="100"></td>
    </tr> 
    <tr>
    <td valign="top"><label for="bar_short_des">Short Description</label></td>
    <td valign="top"><input  type="text" name="bar_short_des" maxlength="100" size="100"></td>
    </tr>
    <tr>
      <td valign="top"><label for="bar_long_des">Long Description</label></td>
      <td valign="top"><input  type="text" name="bar_long_des" maxlength="200" size="100"></td>
    </tr> 
 <tr>
 <td colspan="2" style="text-align:center">
 <input type="submit" value="Enter">
 <input type="reset" value="Clear">
 </td>
</tr>
</table>  
</form>
<center><a href='list_barriers.php'><button>Go to list of Barriers to this Vision</button></a></center>

</body>
</html>
