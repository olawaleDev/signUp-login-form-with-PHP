<!DOCTYPE html>
<html>
<head>
	<title>php_class_2</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
 <div class="container col-xm-6">
    <?php
		session_start();
		if(isset($_SESSION['error'])){
       ?>
		<div class="alert alert-danger">
			<strong>Incorrect email or password</strong>
		</div>
		<?php
		 unset($_SESSION['error']);
		}
		?>

		<form class="col-md-3 card mt-5" method="POST" action="phpclass22.php">
    		      <div class="form-group">
    		      <label>Email:</label>
    		      <input type="email" name="mai" class="form-control" required=""><br>
    		      <label>Password:</label>
    		      <input type="password" name="pass" class="form-control" required=""><br>
    		      <input type="submit" value="submit" class="btn btn-info">
    	        </div>
       </form>

    </div>
</body>
</html>