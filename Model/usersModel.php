<?php
	require_once('DB_config.php');
	error_reporting(0);
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

            if(!oci_execute($result)){
                $r= oci_error($result);
                
                $err_msg = explode("ORA-",strval($r['message']));
                $err_msg = explode("\n",$err_msg[1]);
                
                    echo '<script language="javascript">
                    alert("'.$err_msg[0].'")
                    </script>';
            }else{
                oci_execute($result);
            }
		
	}

	function insertCitizen($Name, $mob , $password, $nid, $address){
		$conn = getConnection();
		$sql = "INSERT INTO citizens VALUES (citizens_citizen_id.NEXTVAL,'$Name', 
		'$mob', '$password', '$nid', '$address')";

		$result = oci_parse($conn, $sql);
		oci_execute($result);

		
	}

	function insertPolice($Name, $jobPost, $joinDate, $mob , $password, $postalCode, $sal){
		$conn = getConnection();
		$sql = "INSERT INTO police VALUES (police_police_id.NEXTVAL, '$jobPost', TO_DATE('$joinDate','dd-mm-yyyy'),
		'$mob', '$password', '$postalCode','$Name','$sal')";

		$result = oci_parse($conn, $sql);

            if(!oci_execute($result)){
                $r= oci_error($result);
                
                $err_msg = explode("ORA-",strval($r['message']));
                $err_msg = explode("\n",$err_msg[1]);
                
                    echo '<script language="javascript">
                    alert("'.$err_msg[0].'")
                    </script>';
            }else{
                oci_execute($result);
				 
                echo '<script language="javascript">  if ( confirm("Successfully Added") ){

		            window.location= "http://localhost/Task/Criminal-Investigation/Views/policeReg.php";

		           }</script>';
            }
		
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
		$sql = "SELECT * FROM ".$user." WHERE ".$user."_id='{$id}'";
		$result = oci_parse($conn, $sql);
		oci_execute($result);
		$user = oci_fetch_array($result, OCI_ASSOC);
		return $user;
	}

	function getCitizen($user, $id){

		$conn = getConnection();
		$sql = "SELECT * FROM ".$user." WHERE citizen_id='{$id}'";
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

	function updateCitizen($id, $Name, $mobno, $nidno, $address){
		$conn = getConnection();
		
		$sql = "UPDATE citizens SET CITIZEN_NAME = '{$Name}', MOBILENO = '{$mobno}',
				NIDNO = '{$nidno}', ADDRESS='{$address}'
				WHERE citizen_id = {$id}";
		$result = oci_parse($conn, $sql);

        oci_execute($result);

	}

	function updatePolice($id, $Name,$jobPost, $joinDate, $mobno, $sal, $postalCode){
		$conn = getConnection();
		
		$sql = "UPDATE police SET POLICE_NAME = '{$Name}', POLICE_MOBILENO = '{$mobno}',
				JOB_POST = '{$jobPost}', JOIN_DATE='{$joinDate}', POSTAL_CODE='{$postalCode}' , SALARY='{$sal}'
				WHERE police_id = {$id}";
		$result = oci_parse($conn, $sql);

            if(!oci_execute($result)){
                $r= oci_error($result);
                
                $err_msg = explode("ORA-",strval($r['message']));
                $err_msg = explode("\n",$err_msg[1]);
                if(substr_compare("20120:","20120:",0)==0){

                    echo $err_msg[0];

                }elseif(substr_compare("20121:","20121:",0)==0){

                    echo $err_msg[0];
                }


            }else{
                oci_execute($result);
                echo 'Updated Successfully';
            }

	}

	function delete($id){
		$conn = getConnection();
		$sql = "DELETE FROM citizens WHERE CITIZEN_ID='{$id}'";
		$result = oci_parse($conn, $sql);
		oci_execute($result);
	}

	function deletePolice($id){
		$conn = getConnection();
		$sql = "DELETE FROM police WHERE POLICE_ID='{$id}'";
		$result = oci_parse($conn, $sql);
		if(!oci_execute($result)){
                $r= oci_error($result);
                $err_msg = explode("ORA-",strval($r['message']));
                $err_msg = explode("\n",$err_msg[1]);
                
                echo '<script language="javascript">
                alert("'.$err_msg[0].'")
                </script>';

            }else{
                oci_execute($result);
            }
	}


?>