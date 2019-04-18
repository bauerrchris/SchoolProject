<?php
    function dimensions($length = 0, $width = 0)
    {
        $area = $length * $width;
        echo $area."<br />";
    }
    dimensions(12,16);
    dimensions(12);
    //dimensions(,5);
    dimensions();

    echo "<br /><hr /><br />";

    function sum($X,$Y) { 
        $Z = $X + $Y; 
        return $Z; //outputs the value of $Z from the function sum 
        } 
        echo "5 + 7 = ".sum(5,7)."<br />"; 
        echo "12 + 2 = ".sum(12,2)."<br />"; 
?>