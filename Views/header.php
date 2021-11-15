<?php
    session_start();
    
if (isset($_COOKIE['flag']))
 {
    require_once('../Model/usersModel.php');
    $user = "admin_reg";
    $userName = $_SESSION['userName'];
    $password = $_SESSION['password'];
    $id = getUserById($user, $userName, $password);
    $user = getUser($user,$id);
 }
 else
 {
    header('location: login.php');
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

    
        
        <div id="header">

            <div class="login">
                <p> Welcome <a href="Viewpro.php"> <?php echo $_SESSION['userName']; ?> <i class="fa fa-user">  </i>  </a> |
                <a href= "../../Controller/Admin/Logout.php"><i class="fa fa-sign-out"></i> </a> 
            </p>
            </div>
           
            
        </div>

        

        <div id="dashboard">

            <h1 id="admin"> Admin Account </h1>

            <ul>
                <li> <a href= "Dashboard.php"> <i class="fa fa-server"> Dashboard </i> </a> </li>
                <li> <a href= "Viewpro.php"> <i class="fa fa-user-circle"> View Profile </i> </a> </li>
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
                                <li><a href="AdminReg.php"><i class="fa fa-user-plus"> Admin </i></a></li>
                                <li><a href="DoctorRegistration.php"><i class="fa fa-user-md"> Doctor </i></a></li>
                                <li><a href="pharmacyReg.php"><i class="fa fa-plus-square"> Pharmacy </i></a></li>
                            </ul>

                        </li>    
                        <li> <a href= "SearchUsers.php"> <i class="fa fa-search"> Search Users </i> </a> </li>
                        <li> <a href= "RemoveUsers.php"> <i class="fa fa-user-times"> Remove Users </i> </a> </li>
                        <li> <a href= "ViewUsers.php"> <i class="fa fa-list"> All Users List </i> </a> </li>
                    </ul>
                <li> 
                    <a href= "#" class="req-btn"> 
                        <i class="fa fa-users"> Requests <span class="fa fa-caret-down third">
                        </span></i> 
                    </a>
                    <ul class="req-show">
                        <li> <a href= "docReq.php"> <i class="fa fa-users"> Doctor </i> </a> </li>
                        <li> <a href= "pharmacy_req.php"> <i class="fa fa-users"> Pharmacy </i> </a> </li>
                    </ul> 
                </li>
                
                
                <li> <a href= "../../Controller/Admin/Logout.php"><i class="fa fa-sign-out"> Logout </i> </a> </li>
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