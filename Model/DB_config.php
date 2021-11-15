<?php

	function getConnection(){
		
		$conn=oci_connect("MID_PROJECT","project","localhost/XE");
		return $conn;
	}
?>