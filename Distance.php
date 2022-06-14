<?php
//input values from user
$x = readline("Please enter the value of x :");
$y = readline("Please enter the value of y :");
// funtion to calculate distance
function calculateDistance($x, $y)
{
// Eucledian formula for distance
     
     $distance = sqrt($x * $x + $y * $y);          
     echo "The distance between the point, ($x, $y) is: " . round($distance, 2);  
}
// calling function to calculate distance
calculateDistance($x, $y);                              
?> 