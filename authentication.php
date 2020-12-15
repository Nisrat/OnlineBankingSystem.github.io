<?php      
    // Initialize the session
    session_start();
?>

    
<?php
    include('config.php');
    $card = $_POST['card_no'];  
    $pin = $_POST['pin_no'];  
      
        //to prevent from mysqli injection  
        $card = stripcslashes($card);  
        $pin = stripcslashes($pin);  
        $card = mysqli_real_escape_string($link, $card);  
        $pin = mysqli_real_escape_string($link, $pin);  
      
        $sql = "select *from users where card_no = '$card' and pin_no = '$pin'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       
         
        if($count == 1){ 
            header("Location: ./welcome.php");
            exit();
            
           
            
            
        }  
        
        else{
            echo "<h1><center> Wrong card no or pin no. Go back and try again.</center></h1>"; 
       
         } 
            
?>  