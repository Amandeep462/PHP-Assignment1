<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
    <?php
//Part 3 Arrays and strings
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  
//getting data from user entry
  $FirstName = $_POST['firstname']; 
 //checking that data fields have  value or not
  if (empty($FirstName) ) { 
      //it will print error message if user submit empty form 
    echo "Blank entry not allowed";
  }
  else{
    echo "Thank You for the submision<br>";
      echo "Your name is :$FirstName<br>";
      //it will convert string to array
     $letters = str_split($FirstName);
      //it will count the number of unique alphabets in array
       if(count($letters)==count(array_count_values($letters))){echo "false";}
      else {echo "True";}
  }
} 

?>

<form action="a1p3.php" method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>