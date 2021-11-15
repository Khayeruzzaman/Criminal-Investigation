<?php
    session_start();
    require_once('../Model/usersModel.php');
    $mobNumErr= $passwordErr="";
   
    $mobNum="";
    $password="";
    $flag=0;
    $msg="";


	if(isset($_POST['Login']))
    {
        
        if(empty($_POST['mobNum'])) 
        {
          $mobNumErr = "Please fill up your mobile number properly";
        }
        else 
        {
          $mobNum = $_POST['mobNum'];
        }

        if(empty($_POST['password'])) 
        {
          $passwordErr = "Please fill up password properly";
        }
        else 
        {
          $password = $_POST['password'];
        }
        
        if($mobNum != "" && $password != "")
        {
           $user=validate($mobNum, $password);

            if ($user)
            {
                $_SESSION['mobNum'] = $mobNum;
                $_SESSION['password'] = $password;
                

                if(isset($_POST["Remember"])) 
                    {
                        setcookie ("mobNum",$_POST["mobNum"],time()+ 3600,"/");
                        setcookie ("password",$_POST["password"],time()+ 3600,"/");
                    }
                setcookie("flag", "true", time()+1800, "/");
                
                header('location: ../Views/dashboard.php');
                
            } else {
                $msg = "Invalid Username/Password.";
            }

        }


	}

   

    else{
		echo "";
	}

?>