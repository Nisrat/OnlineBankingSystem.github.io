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


$card = $_POST["card_no"];
$pin=$_POST["pin_no"];
$newpin= $_POST["pin_no"];

$sql = "UPDATE users SET pin_no='$newpin'  WHERE card_no='$card'";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }
    // Close connection
    mysqli_close($link);

?>
 
