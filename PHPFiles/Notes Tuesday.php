<?php
echo "<h3>PHP Functions</h3>";
/* a PHP function will not execute immediately when a page loads
a function will be executed by a call to the function*/
echo "Syntax for PHP Functions";
function functionname() {
    //Your stuff goes here
}
echo "<br />";
function greeting() {
    echo "Hello User";
}
echo "<br />";
greeting(); //calls the function 'greeting'
echo "PHP functions with arguements";
echo "<br />";
function name($fname) {
    echo "Hello, " . $fname;
}
echo "<br />";
name("James");
echo "<br />";
echo "Multiple Arguements";
function FullName($fname,$lname) {
    echo "Your full name is: ".$fname. " ".$lname;
}
echo "<br />";
FullName("Chris","Bauer");
echo "<br />";
echo "PHP Default Arguement Values";
echo "<br />"; 
$length=0; 
function dimensions($length=0,$width=0) {
    $Area = $length * $width;
    echo $Area;
    echo "<br />";
}

dimensions(12, 16);
dimensions(12);
dimensions($length,5);
dimensions();

echo "<br />";
echo "<b>Returning values from a function</b>";
echo "<br />";

function sum($x,$y){
    $z=$x+$y;
    return $z; //Outputs the value of z within the function itself
}
echo "5 + 7 = " . sum(5,7)."<br />";;
