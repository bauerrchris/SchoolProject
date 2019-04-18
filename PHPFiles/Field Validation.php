Field Validation
<?php
//defines variables
$nameErr = "";
$emailErr = "";
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["name"])){
        $nameErr = "A name is required";
    }
    else {
        $name = test_input($_POST["name"]);
 
        if (!preg_match("/^[a-zA-Z]*?$/",$name)){
            $nameErr = "Name may only contain letters and spaces";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["email"])){
        $emailErr = "An Email is required";
    }
    else {
        $email = test_input($_POST["email"]);
 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Email may only contain letters and spaces";
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>