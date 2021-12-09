<?php
require_once('../Model/usersModel.php');

	$id= $_GET['id'];
	$delete=delete($id);

	echo '<script language="javascript">  if ( confirm("Successfully Deleted") ){

            window.location= "http://localhost/Task/Criminal-Investigation/Views/citizensList.php";

           }</script>';
		
	

?>