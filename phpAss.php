<?php
// if(filter_has_var(INPUT_POST,'submit')){
// 	echo "Ooops!";
// }
  $stud = mysqli_connect('localhost','root','','studdetails');
   $fname=$ln=$em=$pas=$ph='';
   $msg='';
   $msgClass='';
    if(isset($_POST['submit'])){
           $fname = $_POST['fname'];
           $ln = $_POST['ln'];
           $em = $_POST['em'];
           $pas = $_POST['pas'];
           $pass = $_POST['pass'];
           $ph = $_POST['ph'];
           if ($pas != $pass) {
           	echo "password not match";
           	include 'phpAss.html';
           }
           else{

      $q=mysqli_query($stud,"INSERT INTO studinfo(firstName,lastName,email,password,phone) VALUES('$fname','$ln','$em','$pas','$ph')");
     if(!empty($fname) && !empty($ln) && !empty($em) && !empty($pas) && !empty($ph)){
      	 echo  $fname."".$ln."".$em."".$pas."".$ph."<br> Resgistration Successful";
     
      	} else {
      		echo 
      		$msg= "<strong><h3>Fill in the input fields</strong></h3>";
      
      	}
      }

           }

  ?>