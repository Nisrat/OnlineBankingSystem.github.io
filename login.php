<html>  
<head>  
    <title>PHP login system</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body> 
<header> 
<div class="container">
          <h1 style="text-align:center" >Log in</h1>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Card No </label>  
                <input type = "number" name  = "card_no" />  
            </p>  
            <p>  
                <label> Pin No </label>  
                <input type = "password" name  = "pin_no" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
     
    <script>  
            function validation()  
            {  
                var id=document.f1.card_no.value;  
                var ps=document.f1.pin_no.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
        </header>
</body>     
</html>  