<?php
session_start();     // allow for session variables
include_once 'includes/dbh.inc.php'; // access data base connect
$this_vision = $_SESSION['v_ID']; //assign the barrier ID posted from barrier list as a session variable
$this_conversation = $_SESSION['conv_ID'];  // and another one
$this_b_ID = $_SESSION['b_ID'];
?>

<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Barrier Details</title>
</head>
<body>
<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
<div class="navbar"></div><br>  

<?php

// this works $sql = "SELECT `barrier_ID`, `bar_title`, `bar_short_des`, `bar_long_des`, `vision_ID` FROM `barriers` WHERE barrier_ID = 20;";
$sql = "SELECT `bar_title`, `bar_short_des`, `bar_long_des`, `vision_ID` FROM `barriers` WHERE barrier_ID = '$this_b_ID';";
// select the details of this barrier item to display them on the page
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
     while ($row = mysqli_fetch_assoc($result)){  // fetch the results and then assign them all to variables
      $this_bar_title = $row['bar_title']; 
      $_SESSION['bar_title'] = $this_bar_title;  
      $bar_short_des =  $row['bar_short_des'];
      $bar_long_des = $row['bar_long_des'];
       }    
}
?>
<!-- display the barrier details then a button to add solutions and a button to return to the barriers list-->
<center><p><i>Please enter Solutions for <b>"<?php echo $this_bar_title; ?>"</b></i></p></center>
<center><p><i>"<?php echo $bar_short_des?>"</i></p></center>
<center><p><i>"<?php echo $bar_long_des?>"</i></p></center>
<center><a href= 'solution_add.php'><button>Add Solution</button></a><br><br>
<a href = 'list_barriers.php'><button>Return to Barriers List</button></a></center>

</body>
</html>
