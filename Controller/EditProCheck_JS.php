<?php
    session_start();
    require('../Model/usersModel.php');
    
    $data = $_POST['data'];
    $mydata = json_decode($data);

    $user = "admin";
    $mobNum = $_SESSION['mobNum'];
    $password = $_SESSION['password'];
    $id = getUserById($user,$mobNum, $password);
    $user = getUser($user, $id);

    $mobnoErr = $nameErr = $nidnoErr = $addErr = "";

    $Name = ""; 
    $mobno = "";
    $nidno= "";
    $address = "";

	
        
          $Name = $mydata->name;
          $mobno = $mydata->mobno;
          $address = $mydata->address;
          $nidno = $mydata->nidno;

  

       if($Name != "" && $mobno != "" && $address != "" && $nidno != "")
        {

          updateAdmin($id, $Name, $mobno, $nidno, $address);
          
          
          $_SESSION['mobNum'] = $mobno;
          $_SESSION['password'] = $password;
          
          echo "Successfully Updated!";
          

        }
        
    

            
        
        
?>