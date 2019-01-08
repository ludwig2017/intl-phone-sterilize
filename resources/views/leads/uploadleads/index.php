<?php

	include('../../../../config/database.php');

	if(isset($_POST["import"])) {
		echo $filename = $_FILES["file"]["tmp_name"];
		if($_FILES["file"]["size"] > 0) {
			$file = fopen($filename, r);
			while (($empData = fgetcsv($file, 10000,",")) !== FALSE) {
				$sql = "INSERT INTO tbl_client_phone(email,phone,firstname,lastname) VALUES('$empData[0]','$empData[1]','$empData[2]','$empData[3]')";
				$statement = $pdo_connect->prepare($sql);
				$statement->execute();
			}
			fclose($file);
			echo "CSV File has been successfully imported.";
		} else {
			echo "Invalid File: Please upload valid CSV file.";
		}
	}

	echo "<br><hr>";
	echo "<a href='../../../../#!leads'>Back</a>";