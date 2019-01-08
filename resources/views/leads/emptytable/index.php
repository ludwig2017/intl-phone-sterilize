<?php

	include('../../../../config/database.php');

	$pdo_connect->beginTransaction();
	try {
		$query = "DELETE FROM tbl_client_phone";
		$stmt = $pdo_connect->prepare($query);
		$stmt->execute();
		echo "Successfully empty the leads";
		echo "<a href='../../../../#!leads'>Back</a>";
	} catch (PDOException $Exception) {
		echo "FAILED - " . $Exception->getMessage( ) . "(" . (int)$Exception->getCode( ) . ") - " . date('Y-m-d H:i:s') . "\n";
		echo "Transaction ended, no changes were made to the live table" . date('Y-m-d H:i:s') . "\n";
		die;
	}

	$pdo_connect->commit();