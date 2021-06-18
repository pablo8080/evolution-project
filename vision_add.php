<?php
session_start();
//echo $_SESSION['conv_ID'];
?>
<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Add Vision</title>
</head>
<body>
	<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
    <div class="navbar"></div>  
 <br>

 <center><p><i>Welcome back <?php echo $_SESSION['c_host']; ?></i></p><br></center>
 <center><p><i>Please enter Vision details for conversation ID <?php echo $_SESSION['conv_ID']; ?></i></p><br></center>
<form action="includes/add_new_vision.php" method="POST">
<table width="450px">
    <tr>
    <td valign="top"><label for="v_title">Vision Title</label></td>
    <td valign="top"><input  type="text" name="v_title" maxlength="100" size="100"></td>
    </tr> 
    <tr>
    <td valign="top"><label for="v_short_des">Short Description</label></td>
    <td valign="top"><input  type="text" name="v_short_des" maxlength="100" size="100"></td>
    </tr>
    <tr>
      <td valign="top"><label for="v_long_des">Long Description</label></td>
      <td valign="top"><input  type="text" name="v_long_des" maxlength="200" size="100"></td>
    </tr>
    <tr>
        <td valign="top"><label for="v_topic">Topic</label></td>
        <td valign="top"><input  type="text" name="v_topic" maxlength="80" size="30"></td>
    </tr> 
 <tr>
 <td colspan="2" style="text-align:center">
 <input type="submit" value="Enter">
 <input type="reset" value="Clear">
 
 </td>
</tr>
</table>  
</form>
<a href='list_vision8.php'><button>Go to List of Visions for this Conversation</button></a>
</center>

		</div>
    
</body>
</html>
