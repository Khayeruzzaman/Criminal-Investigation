<?php
    
    require_once('../Model/usersModel.php');
    $NameErr = $mobErr = $passwordErr = $jobPostErr = $postalCodeErr = $joinDateErr ="" ;

      $Name = ""; 
      $mob = "";
      $jobPost ="";
      $joinDate = "";
      $password= "";
      $postalCode = "";
    
    if(isset($_POST["submit"]))
    {

        if(empty($_POST['name'])) 
        {
          $NameErr = "Please fill up your Name properly";
        }
        else {
          $Name = $_POST['name'];
        }

        if (empty($_POST['mob'])) {
            $mobErr = "Please Fill up your mobile number properly!"; 
        } 

        else { 
        $mob = $_POST['mob']; 
        }
       

          if(empty($_POST['password'])) {
          $passwordErr = "Please fill up the password properly";
          }

          else {
          

            if (strlen($_POST['password'])<7)
            {
              $passwordErr = "Password length has to be at least 8 characters";  
            }
            else

            {
              if(strpos( $_POST['password'], '@') or strpos($_POST['password'], '#') or strpos($_POST['password'], '$') or strpos($_POST['password'], '%') )
              { 

                $password = $_POST['password'];
               }
               
              else
              {
                $passwordErr = "Password must contain at least one of the special characters (@, #,$, %)";
              }

          }
        }
          
        

        if (empty($_POST['jobPost'])) {
               $jobPostErr = "Please fill up the Job Post properly!"; 
        } 

        else { 
          $jobPost = $_POST['jobPost']; 
        }
        
        if(empty($_POST['postalCode'])) {
          $postalCodeErr = "Please fill up the Postal Code properly";
        }
        else {
          $postalCode = $_POST['postalCode'];
        }

        $joinDate = date("d/m/Y", strtotime($_POST['joinDate']));


        if($Name != "" && $jobPost != "" &&  $joinDate != "" && $mob != "" && $password != "" && $postalCode != "" )
        {
         
          $ins=insertPolice($Name, $jobPost, $joinDate, $mob , $password, $postalCode);
          
          echo '<script language="javascript">  if ( confirm("Successfully Added") ){

            window.location= "http://localhost/Task/Criminal-Investigation/Views/policeReg.php";

           }</script>';

        }

        
    }
    else 
    {
        echo "";
    }
?>