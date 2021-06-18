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
<title>Barriers List</title>
</head>
<body>
<div class ="topcontainer"><img src="logo3web.gif"width="100%" align="absmiddle"></div>   
<div class="navbar"></div>  
<br> 


<center><p><i>These are the Barriers entered for Vision ID: <b><?php echo $_SESSION['v_ID']; ?>:</b>
</i><p>Please select a Barrier ID and press button to enter Solutions for that Barrier</i></p></center>

<center><table align ="centre" id="tableID" border = "1"><tr><th>Barrier Title</th><th>Barrier ID</th><th>Short description</th>
<th>Long description</th></tr>
  <tbody style ="cursor: pointer;">
  <?php
  $sql = "SELECT * FROM barriers where vision_ID = $this_vision";
  $result = mysqli_query($conn, $sql);
  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr><td id=td1>". $row['bar_title']."</td>
                        <td id=td2 onclick=content(this)>". $row['barrier_ID']."</td>
                        <td id=td1>". $row['bar_short_des']."</td>
                        <td id=td1>". $row['bar_long_des']."</td>
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
  <center><p id="para"></p></center>

<form action="includes/select_new_barrier.php" method="POST"> <!-- hidden form to hold the title/ID of the barrier selected fromt the table.-->
<input type="hidden" id="theSelectedBarrier" name="b_ID" value=""> <!-- begins with blank value.This is then set to the value of the cell selected, by the script below-->
<center><input type="submit" value="Enter Solutions"></center> <!-- posts the value to barrier_list.php--> 
</form>
<center><a href='barrier_add.php'><button>Add another barrier</button></a></center><br>
<center><a href='vision_details.php'><button>Return to Vision List</button></a></center>
</body>

<script>  
function content(elem) // gets the info from the selected vision (row)
{
elem.style.backgroundColor = "green";   // highlights the selected row green
var p = document.getElementById("para");
p.innerHTML = 'You selected:' + ' ' + elem.innerText; // tells you what you selected.  
//The list needs to be just the titles then when you select php opens the next page but runs a 
//select query to get the b_ID also, to use in the subsequent pages. I think.
b_ID = elem.innerText;
theSelectedBarrier.value=b_ID;
}
</script>






