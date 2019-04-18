<?php
global $y;
$y=0;
$counted = 0;
$numbers = array(1,2,3,4,5,6,7,8,9,10);
for ($x=0; $x < count($numbers); $x++)
    {
        echo $numbers[$x]."<br />";
        $y = $numbers[$x] + $y;
    }
$counted = $y / count($numbers);
echo "The average is: ".$counted;
?>

