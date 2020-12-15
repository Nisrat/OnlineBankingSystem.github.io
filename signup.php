<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <div class="hero">
        <h2>Sign Up</h2>
        <p><b>PERSONAL DETAILS</b></p>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" >
                
            </div>    
            
            <div class="form-group ">
                <label>Father's name</label>
                <input type="text" name="father_name" >
                
            </div>    
            <div class="form-group ">
                <label>Date of Birth</label>
                <input type="text" name="bdate">
        
            </div>    
            <div class="form-group ">
                <label>Gender</label>
                <input type="text" name="gender">
                
            </div>    
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" >
                
            </div>    
            <div class="form-group ">
                <label>Marital Status</label>
                <input type="text" name="marital_status">
                
            </div>    
            <div class="form-group ">
                <label>Address</label>
                <input type="text" name="address" >
                
            </div>    
            <div class="form-group ">
                <label>City</label>
                <input type="text" name="city" >
               
            </div>    
            </br>
            <p><b>Additional DETAILS</b></p>
            <div class="form-group">
                <label>Religion</label>
                <input type="text" name="religion" >
                
            </div>    
            
            <div class="form-group ">
                <label>Income</label>
                <input type="text" name="income" >
            </div>
            <div class="form-group ">
                <label>Occupation</label>
                <input type="text" name="occupation" >
            </div>
            <div class="form-group ">
                <label>Educational Qualification</label>
                <input type="text" name="edu_qualification" >
            </div>
            </br>
            <p><b>Acoount DETAILS</b></p>
            <div class="form-group">
                <label>Card No</label>
                <input type="number" name="card_no" >
                
            </div>    
            
            <div class="form-group ">
                <label>Pin No</label>
                <input type="password" name="pin_no" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
        
       
        
    </div>    
</body>
</html>