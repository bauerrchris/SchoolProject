<?php
echo "Hello World!";
$y=0;

/* $txt = "Hello World" 
// echo $txt
// echo my first "my first program is ".$txt."!";
//GLOBAL Variables: define outside of a function BUT can only be accessed outside of a function
/Local: Define inside of a function, but can only be accessed inside of a function.*/

echo "<br />";
$x=5; //GLOBAL variable 

/*function varTest() {
	//defining x outside the function will return an error_get_last
	//echo "Variable X is " . $x;
varTest();*/

echo "variable X is ".$x;

/*global keyword
global is used to access a variable from inside a function*/

varTest2() {
	global $y; 
	$y = 10;
	echo "<br />".$y." is my first number";
}
echo "<br /> X and Y make ".$x." and ".$y;

$time = date(“H”)

If ($t >=12 && $t<17)
{
	echo “Good Afternoon”;
}
Else if ($t >= 17) 
{
	echo “Good Night”;}
Else 
{
	echo “Good Morning”;}

?>