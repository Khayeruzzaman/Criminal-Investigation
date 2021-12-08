<?php
	require_once('DB_config.php');
	
	function validate($mobNum, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM admin WHERE mobileno='{$mobNum}' and password='{$password}'";
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
		$sql = "INSERT INTO admin VALUES (admins_admin_id.NEXTVAL,'$Name', 
		'$mob', '$password', '$nid', '$address')";

		$result = oci_parse($conn, $sql);

		oci_execute($result);
		
	}

	function insertCitizen($Name, $mob , $password, $nid, $address){
		$conn = getConnection();
		$sql = "INSERT INTO citizens VALUES (citizens_citizen_id.NEXTVAL,'$Name', 
		'$mob', '$password', '$nid', '$address')";

		$result = oci_parse($conn, $sql);

		oci_execute($result);
		
	}

	function getUserById($user,$mobNum, $password){

		$conn = getConnection();
		$sql = "SELECT * FROM ".$user." WHERE mobileno ='{$mobNum}' AND password = '{$password}'";
		$result = oci_parse($conn, $sql);
		oci_execute($result);
		$user = oci_fetch_array($result, OCI_ASSOC);
		return $user['ADMIN_ID'];
	}

	function getUser($user, $id){

		$conn = getConnection();
		$sql = "SELECT * FROM ".$user." WHERE admin_id='{$id}'";
		$result = oci_parse($conn, $sql);
		oci_execute($result);
		$user = oci_fetch_array($result, OCI_ASSOC);
		return $user;
	}

	function getAllUserNumber($user){
		$i=0;
		$conn = getConnection();
		$sql = "SELECT * FROM ".$user;
		$result = oci_parse($conn, $sql);
		oci_execute($result);

		while($user = oci_fetch_array($result, OCI_ASSOC)){
			
			$i++;
		}

		return $i;
	}

	function updateAdmin($id, $Name, $mobno, $nidno, $address){
		$conn = getConnection();
		
		$sql = "UPDATE admin SET ADMIN_NAME = '{$Name}', MOBILENO = '{$mobno}',
				NIDNO = '{$nidno}', address='{$address}'
				WHERE admin_id = {$id}";
		$result = oci_parse($conn, $sql);
		oci_execute($result);

	}
	


?>