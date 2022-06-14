<?php
//Global can be declared outside the function
$x = 10;
function test()
{
    global $x;
    echo "insidefunction x value is: " .$x;
}
test();
//accessing x outside the function
echo "outside function x value is: ".$x;
?>