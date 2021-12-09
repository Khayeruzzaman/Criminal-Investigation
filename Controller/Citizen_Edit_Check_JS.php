<?php
    session_start();
    require('../Model/usersModel.php');
    
    $data = $_POST['data'];
    $mydata = json_decode($data);


    $mobnoErr = $nameErr = $nidnoErr = $addErr = "";

    $Name = ""; 
    $mobno = "";
    $nidno= "";
    $address = "";

	       
         $id = $mydata->id;
        
          $Name = $mydata->name;
          $mobno = $mydata->mobno;
          $address = $mydata->address;
          $nidno = $mydata->nidno;


  

       if($Name != "" && $mobno != "" && $address != "" && $nidno != "")
        {

          updateCitizen($id, $Name, $mobno, $nidno, $address);
          
          echo "Updated Successfully!";
          

        }
        
    

            
        
        
?>