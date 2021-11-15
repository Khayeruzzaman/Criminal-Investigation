<?php

    include '../Controller/LoginCheck.php';
    
?>

<html>
<head>
	<title>Login</title>
    
</head>
<body>
    <div class="topnav">
        <a href="../Home.html">Home</a>
        <a href="login.php">Login</a>
        <link rel="stylesheet" type="text/css" href="../CSS/loginStyle.css">
        <div class="reg-container">
            
            <a href="#">Registration</a>
            
            <div class="reg-content">
                <a href="CitizenReg.php">Citizens</a>
               
                
            </div>

        </div>
        
    </div>
	

    <form method="post">
    <div class="form">
        
        <legend>
        <a href="../../HOME1.html"> 
            <img align="left" src= "../Pictures/investigation.png" height="70px" width="70px" style="display: inline-block; "> </a> 
             Crime &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             Investigation
        </legend>
        <br>
        <br><br>
        
        <label>Mobile Number</label>
        <input type="text" name="mobNum" 
            value="<?php 
                        if(isset($_COOKIE['mobNum']))
                        {
                            echo $_COOKIE['mobNum'];
                        }
                        else {  echo $mobNum;  } ?>">

        <p style="color:red"><?php echo $mobNumErr; ?> </p>
        <br>

        <label>Password</label>
        <input type="password" name="password"
            value = "<?php

                        if(isset($_COOKIE['password']))
                                {
                                    echo $_COOKIE['password'];
                                }

                        else { echo $password;  }?>">
        <p style="color:red"><b><?php echo $passwordErr; ?></b></p>
        <br>
        
        <input type="checkbox" name="Remember" style="width:5%; display: inline-block;"> Remember Me 
        <br>
        <br>
        
        <input type="submit" id="submit" name="Login" value="Login" style="width: 250px; height: 40px;">
        <p style="color:red"><?php echo $msg; ?></p>
        <br>

        <center>
            <label><a href="#">Forgot Password?</a></label>
            <br>
            <label> Don't have any account?<a href="CitizenReg.php">Sign Up</a> </label> 
        </center>
        


       <br>
       

    </div>
    </form> 

    
        
        

   
    
    <div class="footer">
        <footer>
            <center>
                <p style="color: white;">Copyright@2021</p>
            </center>
        </footer>
    </div>            
            

</body>
</html>
