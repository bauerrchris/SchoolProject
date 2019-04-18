<?php
function OpenConnection()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "class";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db)
    or die("Connection Failed: %s\n" . $conn -> error);
    return $conn;
}
function CloseConnection($conn)
{
    $conn -> close();
}
    /* $host="localhost";
    $user="root";
    $password="";
$con=mysql_connect($host,$user,$password);
if(!$con) {
 echo 'Connected to MySQL';
 //if connected then Select Database.
 $db=mysql_select_db("YOUR_DATABASE_NAME",$con);
 $query=mysql_query("YOUR_MYSQL_QUERY",$db);
}
else {
 echo 'MySQL Server is not connected';
}*/ 