<html>
    <head>
        <style>
            .error {
                color: #ff0000;}
            
            }
        </style>
    </head>
<body>
<?php
//define variables and set to empty values
$nameErr = $emailErr = $genErr = $phoneErr = "";
$name=$email=$comment=$gender=$phone=$Emer="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["name"])){
		$nameErr = "Name is required";
	}
	else {
		$name = test_input($_POST["name"]);
		//Check to see if name only contains letters and white space
		if (!preg_match("/^[a-z A-Z]*$/",$name))
		{
			$nameErr = "Name may only contain letters and spaces";
		} 
	}
	if (empty($_POST["email"])){
		$emailErr = "Email is required";
	}
	else {
		$email = test_input($_POST["email"]);
		//Check to see if email is formatted properly.
		if (!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "This email is invalid";
		} 
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    }
    else {
        $comment = test_input ($_POST["comment"]);
	}
	if (empty($_POST["gender"])) {
		$genErr = "Selection Required";
		
    }
    else {
        $gender = test_input ($_POST["gender"]);
	}

	//Phone Error Check
    if (empty($_POST["phone"])) {
		$phoneErr = "Phone Number Required";
    }
    else {
		$phone = test_input ($_POST["phone"]);
		if (!preg_match("/^[0-9-]*$/",$phone))
		{
			$phoneErr = "Number may only contain numbers and hyphons";
		}
	}

	//Emergency
	if (empty($_POST["Emer"])) {
		$Emer = "";
		
    }
    else {
        $Emer = test_input ($_POST["Emer"]);
	}
	
	
	
	

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

include 'Connection.php';
?>


<form method="post"
action="">

Name: <input type="text" name = "name" value="<?php echo $name ?>">
<span class="error">* <?php echo $nameErr;?></span>
<br>

Email: <input type="text" name = "email" value="<?php echo $email ?>">
<span class="error">* <?php echo $emailErr;?></span>
<br>
Phone Number: <input type="tel" id="phone" name="phone" minlength = "10" maxlength = "12" value=<?php echo $phone ?>> 
<span class="error">* <?php echo $phoneErr;?></span>
Ex: 123-456-7890
<br>


<input type="radio" name="gender" value="Male" > Male<br>

<input type="radio" name="gender" value="Female"> Female<br>

<input type="radio" name="gender" value="Other" required> Other<br>

Emergency Contact: <input type="text" name="Emer" maxlength="25">


<br>
<br>
<br>
<br>

Comment: <textarea name="comment" rows="1" cols = "25">
    <?php echo $comment;?></textarea>

<input type="submit" name="submit" value="Submit">
</form>

<?php

echo "<h2>Your Input:</h2>";
echo $name . "<br>";
echo $email . "<br>";
echo $phone . "<br>";
echo $gender . "<br>";
echo $Emer . "<br>";
echo $comment . "<br><br>";

$conn = OpenConnection();
if (isset($_POST['submit']))
{
	
	$sql = "INSERT INTO formtable 
	VALUES ('$name','$email','$phone','$gender','$comment','$Emer')";
	$result = $conn->query($sql);

	if (! $result){
		die('Error: '.mysqli_error($conn));
	}
	else{
		echo "Data Updated Successfully<br>";
	}
	
}
	
	
?> 
<a href="Form_Output.php">Show Database</a>
<hr />
<form action="" method="post">

  <input name="search" type="search" autofocus>
  <input type="submit" name="button">

</form>
<?php

$conn = OpenConnection();



if(isset($_POST['button'])){ 

  $search=$_POST['search'];




$sql = "SELECT * FROM formtable WHERE Name LIKE '%{$search}%'";
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
}
?>
<hr />


<form action="" method="post">

  <input name="delete" type="search" autofocus>
  <input type="submit" name="del">

</form>

<?php

$conn = OpenConnection();



if(isset($_POST['del'])){ 

  $search=$_POST['delete'];




$sql = "DELETE FROM formtable WHERE Name LIKE '{$search}'";
        $result = $conn->query($sql);
       
            echo "<u>Data Deletion Successful</u><br />";
     
       
}
?>
</body>
</html> 
