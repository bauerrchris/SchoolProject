<html>
    <body>
        <h3><a href="PHP FORM.php">Back to Form Page</a></h3>
        <?php
        include 'Connection.php';

        $conn = OpenConnection();
        $sql = 'SELECT * FROM formtable';
        $result = $conn->query($sql);
        if ($result -> num_rows > 0)
        {
            echo "<u>Data Retreval Successful</u><br />";
            while ($row = $result->fetch_assoc())
            {
                echo "<br /><b>Name</b>: ".$row["Name"]. "<br /><b>Email</b>: ".$row["Email"]. "<br /><b>Phone Number</b>: ".$row["PhoneNumber"] . "<br /><b>Gender</b>: ".$row["Gender"] . "<br /><b>Comments</b>: " . $row["Comment"] . "<br /><b>Emergency Contact</b>: " . $row["EmergencyContact"]. "<br />";
            }
        }
        else
        {
            echo "No results were found.";
        }
        ?>
        
    </body>
</html>

