<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>balance</title>

    
</head>
<body>
    <header>
        <div class="hero">
          <h1 style="text-align:center" >Check Your Current Balance</h1>
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
              margin-left:16%;
              margin-right:0%;
              margin-top:8%;
              
              
            }
           

            </style>
          <form action="ba.php" method="POST"> 
           <div class="frm">
              
                <label>Card No</label>
                <input type="number" name="card_no" >
        </div>
        <button class="button">
            <a href="ba.php"><b>Current Balance</b></a>
          </button>
        </form>  
         
          
        </header>
        </div>
</body>
</html>