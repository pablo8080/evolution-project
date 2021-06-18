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
<title>Add Solutions</title>
</head>
<body>
<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
<div class="navbar"></div>  
 
    <center>
 <p><i>Conversation <?php echo $_SESSION['conv_ID']; ?></i></p>
 <p><i>Please add Solutions to Barrier: <b><?php echo $_SESSION['bar_title'];?><b><i></p>
 <p><i></i></p>
 </center>

<form action="includes/add_new_solution.php" method="POST">
<table width="450px">
    <tr>
    <td valign="top"><label for="s_title">Solution Title</label></td>
    <td valign="top"><input  type="text" name="s_title" maxlength="100" size="100"></td>
    </tr> 
    <tr>
    <td valign="top"><label for="s_short_des">Short Description</label></td>
    <td valign="top"><input  type="text" name="s_short_des" maxlength="100" size="100"></td>
    </tr>
    <tr>
      <td valign="top"><label for="s_long_des">Long Description</label></td>
      <td valign="top"><input  type="text" name="s_long_des" maxlength="200" size="100"></td>
    </tr> 
 <tr>
 <td colspan="2" style="text-align:center">
 <input type="submit" value="Enter">
 <input type="reset" value="Clear">
 </td>
</tr>
</table>  
</form>
<a href='list_solutions.php'><button>Go to list of Solutions for this Barrier</button></a>

</body>
</html>
