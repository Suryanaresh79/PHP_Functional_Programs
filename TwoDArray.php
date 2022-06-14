<?php

//Program to read 2D array and print the elements

$a = readline("Enter num of rows ");
$b = readline("Enter num of columns");

function twodarray($a, $b){
$arr = [];

for($i = 0; $i < $a; $i++){
    for($j = 0; $j < $b; $j++){
        $arr [$i][$j] = readline("Enter the element [' $i '][' $j ']");
    }
}
for($i = 0; $i < $a; $i++){
    for($j = 0; $b < $b; $j++){
        echo $arr[$a][$b] . "  ";
    }
    echo "\n";
}
}
twodarray($a, $b);
?>
