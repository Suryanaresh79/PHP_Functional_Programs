<?php
//factorial function program
function factorial_number($n)
{
    if($n == 0){
        return 1;
    }
    else{
        return $n * factorial_number($n-1);
    }
    }
    echo(factorial_number(4)."\n");
    ?>