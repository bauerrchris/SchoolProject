<?php
include 'Connection.php';

$conn = OpenConnection();

$sql = "CREATE TABLE FormTable (Name VARCHAR(30),Email VARCHAR(30),PhoneNumber varchar(12),Gender varchar(6),Comment varchar(50),EmergencyContact varchar(30));";

$results = $conn->query($sql);

if (! $results)
{
    die ('Error: '.mysqli_error($conn));
}
else
{
    echo "Data was added.";
}
CloseConnection ($conn);
?>