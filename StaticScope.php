<?php
//when we declare a variable we use static keyword
function test()
{
static $x = 5;
echo "$x\n";
$x++;
echo $x;
}
test();
?>