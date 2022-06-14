<?php
$word = "Welcome";
$string = "Hello Welcome";
$word = readline("Enter the word: ");

if(strpos($string, $word) !== false){
    echo "Word Found";
} else {
    echo "word not found";
}
