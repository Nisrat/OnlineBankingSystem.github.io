<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


?>
<html>
<head>  
    <title>HOME</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
    <div class="hero">
    <h1><b>please select your transaction<b><h1>
    <style>
            .button {
              background-color: #995e11;
              border:black;
              color: white;
              padding: 20px 40px;
              text-align: center;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
              margin-left:0%;
              margin-right:2%;
              margin-top:8%;
              
              
            }
            </style>
            <button class="button">
           <a href="deposit.php"><b>DEPOSIT</b></a>
           </button>
            <button class="button">
           <a href="withdraw.php"><b>WITHDRAW</b></a>
            </button>
            <button class="button">
           <a href="fastcash.php"><b>FASTCASH</b></a>
           </button>
            <button class="button">
           <a href="logout.php"><b>TRANSFER</b></a>
           </button>
           <button class="button">
           <a href="balance.php"><b>BALANCE</b></a>
           </button>
           <button class="button">
           <a href="logout.php"><b>HISTORY</b></a>
           </button>
           <button class="button">
           <a href="pinchange.php"><b>CHNAGE PIN</b></a>
           </button>
           <button class="button">
           <a href="logout.php"><b>SIGN OUT</b></a>
           </button>
</div>
</html>