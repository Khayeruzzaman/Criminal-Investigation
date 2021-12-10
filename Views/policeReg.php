<?php 
    $title = 'Add Police';
    include('header.php');

     $NameErr = $mobErr = $passwordErr = $jobPostErr = $postalCodeErr = $joinDateErr ="" ;

      $Name = ""; 
      $mob = "";
      $jobPost ="";
      $joinDate = "";
      $password= "";
      $postalCode = "";
      $sal ="";
      
      
      include '../Controller/PoliceRegCheck.php';
?>
<style type="text/css">
    .form legend{
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    

}

.form {
        width:360px;
        margin: 30px 380px;
        padding:50px;
        border-radius: 10px;
        box-shadow: 0px 0px 30px black;
        background: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%); 
        color: #34495e;

      }
.form  label {
        display:block;
        font-weight: bold;
        text-transform: uppercase;

      }
.form legend{
        display:block;
        font-weight: bold;
        box-sizing: border-box;
}

.form label a{
    text-decoration: none;
}

.form label a:hover{
    cursor: pointer;
    color: black;
}


.form  input {
        display:block;
        width: 100%;
        border: 1px solid #000;
        padding:5px;
        box-sizing: border-box;
      }

#submit{
         
        text-align: center;
        background-color: #063146;
        color: white;
        text-transform: uppercase; 
        font-weight: 900;
        border-bottom: 5px solid black;
        border-radius: 5px;
        cursor: pointer;
      }

      #submit:hover {
        background-color: #ddd;
        color: black;
      }
</style>

<div id="mainview">
    <div class="form">

    <form method="POST" name="jsForm" >
                    
            <legend><b><center>POLICE REGISTRATION</center></b></legend>
            <br>


            <label for="name"><b>Name</label> 
            <input type="text" id="name" name="name" value="<?php echo $Name;?>">
            
            <p style="color:red" id="NameErr"><?php echo $NameErr; ?></p>
            <br>

            <label for="jobPost"><b>Job Post</label>
            
            <input type="text" id="jobPost" name="jobPost" value="<?php echo $jobPost;?>">
            <p style="color:red" id="jobPostErr"><?php echo $jobPostErr; ?></p>
            <br>

            <label for="joinDate"><b>Join Date</label>
            
            <input type="Date" id="joinDate" name="joinDate" value="<?php echo $joinDate;?>">
            <br>

            <label for="mob"><b>Mobile No</label>
            
            <input type="text" id="mob" name="mob" value="<?php echo $mob;?>">
            <p style="color:red" id="mobErr"><?php echo $mobErr; ?></p>
            <br>

            

            <label for="password"><b>Password</label>
            <input type="password" id="password" name="password" value="<?php echo $password;?>">
            <p style="color:red" id="passwordErr"><?php echo $passwordErr; ?></p>
            <br>

            <label for="postalCode"><b>Postal Code</label>
            <input type="text" id="postalCode" name="postalCode" value="<?php echo $postalCode;?>">
            <p style="color:red" id="postalCodeErr"><?php echo $postalCodeErr; ?></p>
            <br>

            <label for="sal"><b>Salary</label>
            <input type="text" id="sal" name="sal" value="<?php echo $sal;?>">
            <br>

            <center>
            <input type="submit" id="submit" name="submit" value="Submit"  style="width: 260px; display: inline-block; height: 45px">
           
            </center> 

    </form>
    </div>

</div>

<?php include('footer.php');?> 