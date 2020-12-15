
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
$query = $link->query("SELECT `balan` FROM `balance` Where card_no='$card';");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['balan'];
    
}

echo "YOUR CURRENT BALANCE IS : " ;
echo $array[0];

  // Close connection
  mysqli_close($link);
?>