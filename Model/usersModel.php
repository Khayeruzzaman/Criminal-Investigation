<?php
	require_once('DB_config.php');
	
	function validate($mobNum, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM citizens WHERE mobileno='{$mobNum}' and password='{$password}'";
		$result = oci_parse($conn, $sql);
		oci_execute($result);
		$user = oci_fetch($result);
		
		if(oci_num_rows($result) > 0 ){
			return $user;
		}else{
			return false;
		}
	}

	function insertAdmin($Name, $mob , $password, $nid, $address){
		$conn = getConnection();
		$sql = "INSERT INTO citizens VALUES (citizens_citizen_id.NEXTVAL,'$Name', 
		'$mob', '$password', '$nid', '$address')";

		$result = oci_parse($conn, $sql);

		oci_execute($result);
		
	}

	
	


?>