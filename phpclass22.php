<?php
require "login.php";
session_start();
$mail = $_POST['mai'];
$pass = $_POST['pass'];
 $select = mysqli_query($con, "SELECT * FROM studinfo WHERE email='$mail' AND password ='$pass'");
 $result = mysqli_num_rows($select);
 if ($result > 0) {
 	echo "<h2>Login successful!<h3>";
 }
 else
 {
 	$_SESSION['error']=true;
 	header("location:phpclass2.php");
 }

?>