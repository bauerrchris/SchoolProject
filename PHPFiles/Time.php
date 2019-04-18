<?php 
date_default_timezone_set("America/Chicago");
$time = date("H");


if ($time >=12 && $time <17)
{
	echo "Good Afternoon";
}
else if ($time >=17)
{
    echo "Good Night";
}
else
{
    echo "Good Morning";
}
?>
