<?php
$day = date('j');
$month = date('m');
$year = date('Y');

if ($month == 01) {
    echo "January " . $day . ", " . $year;
}
else if ($month == 02) {
    echo "February " . $day . ", " . $year;
}
else if ($month == 03) {
    echo "March " . $day . ", " . $year;
}
else if ($month == 04) {
    echo "April " . $day . ", " . $year;
}
else if ($month == 05) {
    echo "May " . $day . ", " . $year;
}
else if ($month == 06) {
    echo "June " . $day . ", " . $year;
}
else if ($month == 07) {
    echo "July " . $day . ", " . $year;
}
else if ($month == 8) {
    echo "August " . $day . ", " . $year;
}
else if ($month == 9) {
    echo "September " . $day . ", " . $year;
}
else if ($month == 10) {
    echo "October " . $day . ", " . $year;
}
else if ($month == 11) {
    echo "November " . $day . ", " . $year;
}
else if ($month == 12) {
    echo "December " . $day . ", " . $year;
}
else
{
    echo "Error 414: Something went wrong...";
}