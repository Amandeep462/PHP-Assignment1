<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php
//Part 2 Form Validations
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  
//getting data from user entries
  $FirstName = $_POST['firstname']; 
  $LastName = $_POST['lastname'];
  $Age = $_POST['age'];
 
 //validations for entered data
  if (empty($FirstName) || empty($LastName)||empty($Age)) { 
    echo "For first three fields Blank entry are not allowed";
  }
  else{
      //printing Data entered by the user
    echo "Thank You for the submision<br>";
      echo "Your First name is :$FirstName<br>";
      echo "Your Last name is :$LastName<br>";
      echo "Your Age is :$Age<br>";
     
  }
} 

?>

<form action="a1p2.php" method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="
          <?php 
            if(isset($_POST['firstname']))
            echo $_POST['firstname'];
            ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40"  ></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="YES"> Yes <input type="radio" name="newsletter" value="NO"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>