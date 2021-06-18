<?php
session_start();
include_once 'includes/dbh.inc.php';
$this_vision = $_SESSION['v_ID'];
$b_ID = $_SESSION['b_ID'];

?>

<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Solutions List</title>
</head>
<body>
	<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
    <div class="navbar"></div>  

<br> 
<center><p><i>These are the Solutions entered for Barrier ID 
<?php echo $_SESSION['b_ID']; ?>:<b>"
<?php echo $_SESSION['bar_title'];?>"<b></i></p></center>
<!--<center><table align ="centre" id="tableID" border = "1"><tr><th>Benefit</th><th>ID</th></tr>-->
<center><table align ="centre" id="tableID" border = "1"><tr><th>Solution</th>
<th>Solution ID</th>
<th>Short description</th>
<th>Long description</th>
</tr>
  <tbody style ="cursor: pointer;">
  <?php
  $sql = "SELECT * FROM solutions where bar_ID = $b_ID";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td id=td1>". $row['s_title']."</td>
                  <td id=td1>". $row['solution_ID']."</td>
                  <td id=td1>". $row['s_short_des']."</td>
                  <td id=td1>". $row['s_long_des']."</td>
                  
                  </tr>";
          }
          echo "</table>";
  }
  else {
          echo "0 results";
  }
  ?>
  </tbody>
  </table></center>
<br>
<center><a href='solution_add.php'><button>Add another Solution</button></a>
<a href='vision_details.php'><button>Return to Vision List</button></a>
<a href='conv_summary.php'><button>Finished</button></a></center>
</body>






