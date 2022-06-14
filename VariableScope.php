<?php
$x = 10;
static $x = 15;
function test()
{
    $x = 5;
    echo "This is Local varaible: $x\n";
}
echo "This is global varaible: $x\n";
test();