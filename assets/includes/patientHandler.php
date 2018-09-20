<?php

include 'db_connect.php';
$db = new Database();

$response = [];

$result = $db->getPatients();
if ($result) {
	$response = json_encode($result);
}

else{
	$response = "No Data";
}

echo json_encode($response);

?>