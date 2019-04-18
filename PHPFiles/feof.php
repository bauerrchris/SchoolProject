<?php
$myfile = fopen("webdictionary.txt", "r"); //opens the file "webdictionary.txt"
// some code to be executed....
fclose($myfile); //closes the file that the vartiable myfile was set to
?>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!"); //opens the file "webdictionary.txt". If file is not found or was unsuccessful, echo "unable to open file"
echo fgets($myfile); //outputs the first line of "webdictionary.txt"
fclose($myfile); //closes the file
?>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");//opens the file "webdictionary.txt". If file is not found or was unsuccessful, echo "unable to open file"
// Output one line until end-of-file
while(!feof($myfile)) { //feof checks to see if the end-of-file has been reached
  echo fgets($myfile) . "<br>";
}
fclose($myfile);//closes the file
?>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");//opens the file "webdictionary.txt". If file is not found or was unsuccessful, echo "unable to open file"
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);//reads the file character by character until the full file has been output
}
fclose($myfile);
?>