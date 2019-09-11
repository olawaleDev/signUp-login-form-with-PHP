<?php
  require "login.php";
  $select=mysqli_query($con,"SELECT * FROM inputdetails order by firstName desc");
  while ($row=mysqli_fetch_array($select)){
  	echo "<h1>".$row['firstName']."</h1>";
  }
?>