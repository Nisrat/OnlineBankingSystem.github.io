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

/*
$sql="SELECT balan FROM balance WHERE card_no='$card'";*/
$query = $link->query("SELECT `card_no`,`deposit`,`withdraw`,`date` FROM `history` Where card_no='$card';");
$n=$link->query("SELECT `name` FROM `users` Where card_no='$card';");



echo "History Of Your Transaction </br>" ;

    // output data of each row
    while($row = $query->fetch_assoc()) {
        echo "<pre><br> card_no: ". $row["card_no"]. " - Deposit: ". $row["deposit"]. "      - Wiithdraw: " . $row["withdraw"] . "      - Date: " . $row["date"] .  "<br></pre>";
    }

  // Close connection
  mysqli_close($link);
?>