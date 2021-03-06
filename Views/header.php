<?php
    session_start();
    
if (isset($_COOKIE['flag']))
 {
    require_once('../Model/usersModel.php');
    $citizen = getUserById('admin', $_SESSION['mobNum'], $_SESSION['password']);
    $user = getUser('admin',$citizen);  
 }
 else
 {
    header('location:../Controller/Logout.php');
 }

?>
<html>
<head>
    <title> <?=$title?> </title>
     <link rel="stylesheet" type="text/css" href="../CSS/dashboardAdmn.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="../CSS/homeStyle.css">
     <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    

    
     
</head>
<body>

    
        
        <div class="topnav">

            <div class="login">
                    <p style="color:White;"> Welcome <a href="#"> <?php echo $user['ADMIN_NAME']; ?> <i class="fa fa-user">  </i>  </a> |
                    <a href= "../Controller/Logout.php"><i class="fa fa-sign-out">Logout</i> </a> 
                    </p>
            </div>
           
            
        </div>

        

        <div id="dashboard">

            <h1 id="admin"> Admin Panel </h1>

            <ul>
                <li> <a href= "Dashboard.php"> <i class="fa fa-bars"> Dashboard </i> </a> </li>
                <li> <a href= "viewProfile.php"> <i class="fa fa-user-circle"> View Profile </i> </a> </li>
                <li> 
                    <a herf="" class="feat-btn">
                        <i class="fa fa-users"> Users <span class="fa fa-caret-down first"> </span> </i> 
                    </a>
                    <ul class="feat-show">
                        <li>
                            <a href= "#" class="user-btn"> 
                                <i class="fa fa-user-plus"> Add Users <span class="fa fa-caret-down second"> 
                                </span> </i> 
                            </a> 
                            <ul class="user-show"> 
                                <li><a href="adminReg.php"><i class="fa fa-user-plus"> Admin </i></a></li>
                                <li><a href="ManuCitizenReg.php"><i class="fa fa-user-plus"> Citizen </i></a></li>
                                <li><a href="policeReg.php"><i class="fa fa-plus-square"> Police </i></a></li>
                                
                            </ul>

                        </li>    
                        <li> <a href= "SearchUsers.php"> <i class="fa fa-search"> Search Users </i> </a> </li>
                        
                    </ul>
                <li> 
                    <a href= "#" class="req-btn"> 
                        <i class="fa fa-list"> All Users List <span class="fa fa-caret-down third">
                        </span></i> 
                    </a>
                    <ul class="req-show">
                        <li> <a href= "policeList.php"> <i class="fa fa-users"> Police </i> </a> </li>
                        <li> <a href= "citizensList.php"> <i class="fa fa-users"> Citizen </i> </a> </li>
                        <li> <a href= "CriminalList.php"> <i class="fa fa-users"> Criminal </i> </a> </li>
                        <li> <a href= "stationList.php"> <i class="fa fa-users"> Station </i> </a> </li>
                    </ul> 
                </li>
               <li><a href= "history.php"> <i class="fa fa-history"> History </i> </a></li>

                <li><a href= "settings.php"> <i class="fa fa-cog"> Settings </i> </a></li>
                
            </ul>
            
        </div> 
            
        
    
        

        <script >

                $('.feat-btn').click( function(){
                $('#dashboard ul .feat-show').toggleClass("show");
                $('#dashboard ul .first').toggleClass("rotate");
            });

                $('.user-btn').click( function(){
                $('#dashboard ul .user-show').toggleClass("show1");
                $('#dashboard ul .second').toggleClass("rotate");
            });

            $('.req-btn').click( function(){
                $('#dashboard ul .req-show').toggleClass("show3");
                $('#dashboard ul .third').toggleClass("rotate");
            });

                

        </script>