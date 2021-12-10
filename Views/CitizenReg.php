<?php
    
    $NameErr = $mobErr = $passwordErr = $nidErr = $addressErr = "" ;

      $Name = ""; 
      $mob = "";
      $userName= "";
      $password= "";
      $nid = "";
      $address = ""; 
      
      include '../Controller/CitizenRegCheck.php';


?>

<html>
<head>
	<title>Registration</title>
    

</head>


<body>
    <div class="topnav">
        <a href="../Home.html">Home</a>
        <a href="login.php">Login</a>
        <link rel="stylesheet" type="text/css" href="../CSS/regStyle.css">
        <div class="reg-container">
            
            <a href="#">Registration</a>
            
            <div class="reg-content">
                <a href="CitizenReg.php">Citizens</a>
               
                
            </div>

        </div>
        
    </div>

        <div class="form">
                <form method="POST" name="jsForm" >
                    
                        <legend><b><center>CITIZEN REGISTRATION</center></b></legend>
                        <br>


                        <label for="name"><b>Name</label> 
                        <input type="text" id="name" name="name" value="<?php echo $Name;?>">
                        
                        <p style="color:red" id="NameErr"><?php echo $NameErr; ?></p>
                        <br>

                        <label for="mob"><b>Mobile No</label>
                        
                        <input type="test" id="mob" name="mob" value="<?php echo $mob;?>">
                        <p style="color:red" id="mobErr"><?php echo $mobErr; ?></p>
                        <br>

                        

                        <label for="password"><b>Password</label>
                        <input type="password" id="password" name="password" value="<?php echo $password;?>">
                        <p style="color:red" id="passwordErr"><?php echo $passwordErr; ?></p>
                        <br>

                        <label for="nid"><b>Nid NO</label>
                        <input type="text" id="nid" name="nid" value="<?php echo $nid;?>">
                        <p style="color:red" id="nidErr"><?php echo $nidErr; ?></p>
                        <br>

                        <label> <b>Address</label>
                        <input type="text" id="address" name="address" 
                            value="<?php echo $address;?>">

                        <p style="color:red" id="addressErr"><?php echo $addressErr; ?></p>
                        <br>
                            
                
                        
                        <center>
                        <input type="submit" id="submit" name="submit" value="Submit"  style="width: 260px; display: inline-block; height: 45px">
                       
                        </center> 

                </form>
    </div>

    <div class="footer">
        <footer>
            <center>
                <p style="color: black;">Copyright@2021</p>
            </center>
        </footer>
    </div>
</body>
</html>
