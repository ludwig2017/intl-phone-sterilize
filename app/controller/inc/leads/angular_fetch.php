<?php

	include('../../../../config/database.php');

	$output = array();
	$sql = "SELECT * FROM tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '44%'";
	$query=$sqli_connect->query($sql);
	while($row=$query->fetch_array()){
		$output[] = $row;
	}

	echo json_encode($output);