<?php
session_start();
include_once 'includes/dbh.inc.php';
$this_conv = $_SESSION['conv_ID'];
?>
<html><head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="evostyle.css.txt">
<title>Vision List</title>
</head>

<body>
	<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
    <div class="navbar"></div>  
<br> 
<br> 
<center><p><i>These are the Visions entered for conversation ID <?php echo $_SESSION['conv_ID']; ?></i></p></center>
<center><p><i>Click on a Vision and then press <b>Continue</b> to add Benefits and Barriers</i></p><br></center>
<center><table align ="centre" id="tableID" border = "1"><tr><th>Vision Title</th><th>Vision ID</th></tr>
  <tbody style ="cursor: pointer;">
  <?php
  $sql = "SELECT * FROM visions where conv_ID = '$this_conv';";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td id=td1 onclick=content(this)>". $row['v_title']."</td>
                            <td id=td2 onclick=content(this)>". $row['VisionID']."</td>
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
<center><p id="para"></p></center>


<form action="includes/select_new_vision.php" method="POST"> <!-- hidden form to hold the title/ID of the vision selected fromt the table.-->
<input type="hidden" id="theSelectedVision" name="v_ID" value=""> <!-- beginss with blank value.This is then set to the value of the cell selected, by the script below-->
<center><a href='vision_add.php'><button>Add another Vision</button></a>
<input type="submit" value="Continue"></center><br> <!-- posts the value to vision_list.php--> 


<center><a href='conv_summary.php'><button>Finished</button></a>
</form>
</body>

<script>  
function content(elem) // gets the info from the selected vision (row)
{
elem.style.backgroundColor = "green";   // highlights the selected row green
var p = document.getElementById("para");
p.innerHTML = 'You selected:' + ' ' + elem.innerText; // tells you what you selected.  
//The list needs to be just the titles then when you select php opens the next page but runs a 
//select query to get the v_ID also, to use in the subsequent pages. I think.
v_ID = elem.innerText;
theSelectedVision.value=v_ID;
}
</script>






