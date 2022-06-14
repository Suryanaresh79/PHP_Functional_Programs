<?php
function dateDiffInDays($date1, $date2)
{
    $diff = strtotime($date2) - strtotime($date1);
    return abs(round($diff / 86400)); //24 * 60 * 60 = 86400 seconds
}
$date1 = "20-05-2020"; //start date

$date2 = "10-05-2020"; //end date

$dateDiff = dateDiffInDays($date1, $date2);
$date1 = readline("Enter the date1: ");
$date2 = readline("Enter the date2: ");
echo("Difference between two dates: " . $dateDiff . " Days ");
?>
