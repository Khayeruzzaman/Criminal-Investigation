<?php

    session_start();
    require('../Model/usersModel.php');
    
    $data = $_POST['data'];
    $mydata = json_decode($data);

    $id = $mydata->id;
  
    $Name = $mydata->name;
    $mobno = $mydata->mobno;
    $jobPost = $mydata->jobPost;
    $joinDate = $mydata->joinDate;
    $sal = $mydata->sal;
    $postalCode = $mydata->postalCode;


   if($Name != "" && $mobno != "" && $jobPost != "" && $joinDate != "" && $postalCode != "" && $sal != "")
    {

      updatePolice($id, $Name, $jobPost, $joinDate, $mobno, $sal, $postalCode);
      
      
      
    }
            
        
?>