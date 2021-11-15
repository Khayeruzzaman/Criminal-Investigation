<?php

	session_start();
	session_destroy();
	setcookie("flag","false", time()-10,"/");
	setcookie("userName","", time()-10,"/");
	setcookie("password","", time()-10,"/");

	header('location: ../Views/Login.php');
    
?>