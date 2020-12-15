<?php
// Include config file
//require_once "config.php";
 
// Define variables and initialize with empty values
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = $_POST["name"];
$fname= $_POST["father_name"];
$bdate= $_POST["bdate"];
$gender= $_POST["gender"];
$email = $_POST["email"];
$mstatus = $_POST["marital_status"];
$address = $_POST["address"];
$city = $_POST["city"];
$card = $_POST["card_no"];
$pin = $_POST["pin_no"];
$religion = $_POST["religion"];
$income = $_POST["income"];
$occu = $_POST["occupation"];
$edu = $_POST["edu_qualification"];

$sql="INSERT INTO users( name, father_name, bdate, gender, email, marital_status, address, city, card_no, pin_no,religion, income, occupation, edu_qualification) VALUES('$name','$fname','$bdate','$gender','$email','$mstatus', '$address','$city','$card','$pin', '$religion', '$income', '$edu', '$occu')";
$s= "INSERT INTO balance(card_no)VALUES('$card')";
if ($link->query($sql) === TRUE && $link->query($s) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }
    // Close connection
    mysqli_close($link);

?>
 
