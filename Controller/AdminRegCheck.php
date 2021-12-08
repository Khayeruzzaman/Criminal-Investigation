<?php
    
    require_once('../Model/usersModel.php');
    $NameErr = $mobErr = $passwordErr = $nidErr = $addressErr = "" ;

      $Name = ""; 
      $mob = "";
      $password= "";
      $nid = "";
      $address = "";
      $status = "reset";
    
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
          
        

        if (empty($_POST['nid'])) {
               $nidErr = "Please fill up your nid properly!"; 
        } 

        else { 
          $nid = $_POST['nid']; 
        }
        
        if(empty($_POST['address'])) {
          $addressErr = "Please fill up present address properly";
        }
        else {
          $address = $_POST['address'];
        }


        if($Name != "" && $mob != "" && $password != "" && $nid != "" && $address != "" )
        {
         
          $ins=insertAdmin($Name, $mob , $password, $nid, $address);
          
          echo '<script language="javascript">  if ( confirm("Successfully Added") ){

            window.location= "http://localhost/crime/Views/login.php";

           }</script>';

        }

        
    }
    else 
    {
        echo "";
    }
?>