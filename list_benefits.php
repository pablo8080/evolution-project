<?php
session_start();
include_once 'includes/dbh.inc.php';
$this_vision = $_SESSION['v_ID'];
?>

<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Benefits List</title>
</head>
<body>
	<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
    <div class="navbar"></div>  

<br> 
<center><p><i>These are the Benefits entered for Vision ID 
<?php echo $_SESSION['v_ID']; ?>:<b>"
<?php echo $_SESSION['v_title'];?>"<b></i></p></center>
<!--<center><table align ="centre" id="tableID" border = "1"><tr><th>Benefit</th><th>ID</th></tr>-->
<center><table align ="centre" id="tableID" border = "1"><tr><th>Benefit</th><th>ID</th><th>Short description</th>
<th>Long description</th></tr>
  <tbody style ="cursor: pointer;">
  <?php
  $sql = "SELECT * FROM benefits where vision_ID = $this_vision";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
                 // echo "<tr><td id=td1 onclick=content(this)></td></tr>";
                  echo "<tr><td id=td1 onclick=content(this)>". $row['ben_title']."</td>
                       <td id=td2 onclick=content(this)>". $row['benefit_ID']."</td>
                       <td id=td3 onclick=content(this)>". $row['ben_short_des']."</td>
                       <td id=td4 onclick=content(this)>". $row['ben_long_des']."</td></tr>";
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
<center><a href='vision_details.php'><button>Return to Vision Details</button></a>
<a href='benefit_add.php'><button>Add another Benefit</button></a></center>
</body>






