<?php

require_once('../Model/usersModel.php');

if(isset($_POST['on'])){

	$conn = getConnection();
	$sql = "ALTER TABLE police ENABLE ALL TRIGGERS";
	$result = oci_parse($conn, $sql);
	oci_execute($result);

	echo '<script>
		alert("Enabled All Triggers.");
		window.location= "http://localhost/Task/Criminal-Investigation/Views/settings.php";
		</script>';

}elseif (isset($_POST['off'])) {

	$conn = getConnection();
	$sql = "ALTER TABLE police DISABLE ALL TRIGGERS";
	$result = oci_parse($conn, $sql);
	oci_execute($result);

	echo '<script>
		alert("Disabled All Triggers.");
		window.location= "http://localhost/Task/Criminal-Investigation/Views/settings.php";
		</script>';
}

?>