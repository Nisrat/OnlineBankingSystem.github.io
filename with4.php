<?php

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


$card= $_POST["card_no"];
$sql="INSERT INTO history(card_no, withdraw) VALUES('$card', '20000')";
$balan="UPDATE balance SET balan = balan - 20000 Where card_no='$card'";

if ($link->query($sql) === TRUE && $link->query($balan) === TRUE) {
    header("Location: ./welcome.php");



            exit();
    
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }
    // Close connection
    mysqli_close($link);

?>
 
