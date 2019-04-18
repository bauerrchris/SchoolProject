<?php
function greater($num1, $num2)
{
    if ($num1 > $num2){
        echo "Your first number, " . $num1 . ", is greater than your second number, " . $num2 . "<br />";
    }
    if ($num1 < $num2)
    {
        echo "Your first number, " . $num1 . ", is less than your second number, " . $num2 . "<br />";
    }
    if ($num1 == $num2)
    {
        echo "Your first number, " . $num1 . ", is equal to your second number, " . $num2. "<br />";
    }
}
greater(12,16);
greater(11,11);
greater(300,5000);