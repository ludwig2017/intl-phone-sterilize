<?php

	// PDO
	$pdo_connect = new PDO("mysql:host=localhost;dbname=phone_validator", "root", "");

	// MySQLi
	$sqli_connect = new mysqli('localhost', 'root', '', 'phone_validator');
	if($sqli_connect->connect_error) {
		die('Connection failed: ' . $sqli_connect->connect_error);
	}