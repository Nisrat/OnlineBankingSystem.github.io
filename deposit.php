<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


?>
<html>
<head>  
    <title>Deposit</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
    <div class="hero">
    <h1><b>deposit<b><h1>
    
    <form action="depo.php" method="POST"> 
           <div class="frm">
              
                <label>Card No</label>
                <input type="number" name="card_no" >
</br>
                <label>Deposit Amount</label>
                <input type="text" name="deposit" >
</br>
                <input type="submit" class="btn btn-primary" value="Done">
                 
</div>  
   </div>
</form>
</html>