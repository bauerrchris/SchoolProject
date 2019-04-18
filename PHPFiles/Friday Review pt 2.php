<?php
$date = date("r");
$dayofweek = date("l", strtotime($date));
echo $date . ' fell on a ' . $dayofweek;

echo "<h3>Message of the week:</h3>". $dayofweek;
if ($dayofweek == "Friday")
    {
        echo "<br />Whoa is it the weekend already??";
    }
else if ($dayofweek == "Sunday")
    {
        echo "<br />Ah man.. Back to work tomorrow.";
    }
else if ($dayofweek == "Monday")
    {
        echo "<br />Im not able to do Monday without my coffee!";
    }
else if ($dayofweek == "Tuesday")
    {
        echo "<br />I wonder what the new video game out today is!";
    }
else if ($dayofweek == "Wednesday")
    {
        echo "<br />I am so close to Friday";
    }
else if ($dayofweek == "Thursday")
    {
        echo "<br />OMG FRIDAY";
    }
else if ($dayofweek == "Saturday")
    {
        echo "<br />BEST DAY EVER!!!";
    }
else {
    "You dont exist in the calendar.";
}