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
<div class="navbar"></div>  
<div class="content"><br><br><center><p><i>Please enter conversation details.</i></p><br></center>          


<form action="includes/add_new_conv.php" method="POST">
<table width="450px">
    <tr><td valign="top"><label for="host_name">Host Name</label></td>
    <td valign="top"><input  type="text" name="host_name" maxlength="50" size="30"></td></tr> 
    <tr><td valign="top"><label for="date">Date</label></td>
    <td valign="top"><input  type="text" name="date" maxlength="80" size="30"></td></tr>
    <tr><td valign="top"><label for="type">Conversation Type</label></td>
    <td valign="top"><input  type="text" name="type" maxlength="80" size="30"></td></tr>
    <tr><td valign="top"><label for="attendees">Participating</label></td>
    <td valign="top"><input  type="text" name="attendees" maxlength="80" size="30"></td></tr> 
    <tr><td colspan="2" style="text-align:center">
        <input type="submit" value="Enter">
        <input type="reset" value="Clear"></td></tr>
</table>  
<br><br>
</center>
</div>
</body>
</html>
