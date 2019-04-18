<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    mysql_select_db('business');

    $conn = new mysqli($dbhost, $dbuser, $dbpass)
    or die("Connection Failed: %s\n" . $conn -> errpr);

    echo "Connection Successful \n";

    $sql = 'INSERT INTO FormTable (name, email, phone, gender, comment)
    VALUES ($name, $email, $phone, $gender, $comment)';

    $retval = mysql_query ($sql, $conn);

    if(! $retval)
    {
        die('Could not get data: ') . mysql_error();
    }
    CloseConnection ($conn)
    ?> 