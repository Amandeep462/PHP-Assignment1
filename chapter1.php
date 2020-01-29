<html>
<body>
<?php
    //Part 1 Numbers and Strings
    //Declared variables
    $base = 10;
    $height= 20;
    //formula to calculate area of triangle
    $area=(1/2)*($base*$height);
    //it will round off the Calculated area tow points aftre decimal
    $rounder_area=number_format($area,2);
    //Printing message
    echo "<h3>The area of the triangle is :" .$rounder_area."</h3><br><br>";
    
    
    $MY_NAME="Aman Deep";
    //Converting entered string to upper case
    $to_upper_case=strtoupper($MY_NAME);
    //Printing message
    echo "My first name is : <strong>$to_upper_case</strong><br><br><br>";
    
    //Part 3 Arrays and strings
    $string="lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laboru";
    
    //Converting string to upper case
    $upperCase=strtoupper($string);

    //Converting string to array by using explode function
    $stringArray=explode(' ',$upperCase);
    //sorting an array
    sort($stringArray);
    
    //Printing array elements
    $length =count($stringArray);
    
    for($i=1;$i<$length;$i++)
    {
        echo $stringArray[$i]."<br>";
    }
    
    ?>
</body>
</html>