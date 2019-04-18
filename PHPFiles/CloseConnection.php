<?php
//check connection//
include 'Connection.php';
$conn = OpenConnection();
echo "Connection Successful <br />";

$sql = 'SELECT Model, Price FROM camera';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Model: " . $row["Model"]. " - Price: " . $row["Price"] . "<br />";
    }
}
else {
    echo "0 results";
}
echo "Data Retrieval Successful";

CloseConnection($conn);
?>