<?php
session_start();     // allow for session variables
include_once 'includes/dbh.inc.php'; // access data base connect
$this_vision = $_SESSION['v_ID']; //assign the vision ID posted from vision list as a session variable
$this_conversation = $_SESSION['conv_ID'];  // and another one
?>

<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Vision Details</title>
</head>
<body>
<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
<div class="navbar"></div><br>  

<?php
$sql = "SELECT  `v_title`, `v_short_des`, `v_long_des`, `v_topic` FROM `visions` WHERE VisionID = $this_vision;";
// select the details of this vision item to display them on the page
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
       while ($row = mysqli_fetch_assoc($result)){  // fetch the results and then assign them all to variables
      $v_title = $row['v_title'];    
      $_SESSION['v_title'] = $v_title;
      $v_short_des =  $row['v_short_des'];
      $v_long_des = $row['v_long_des'];
      $v_topic = $row['v_topic'];
       }    
}
?>
<!-- display the vision details then buttons to add benefits / barriers  and a butto to return to the visions list-->
<center><p><i>Below are the details for: <b>"<?php echo $v_title; ?>"</b></i></p></center>
<center><p><i>Please enter Benefits and Barriers.</b></i></p></center>
<center><p><i>"<?php echo $v_short_des?>"</i></p></center>
<center><p><i>"<?php echo $v_long_des?>"</i></p></center>
<center><a href= 'benefit_add.php'><button>Add Benefit</button></a>
<a href= 'barrier_add.php'><button>Add Barrier</button></a><br><br>
<a href = 'list_vision8.php'><button>Return to Vision List</button></a></center><br>
<center><a href='conv_summary.php'><button>Finished</button></a></center>

</body>
</html>
