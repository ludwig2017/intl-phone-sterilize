<?php

	include('../../../../config/database.php');

	$query = "SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '44%'";

	$statement = $pdo_connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$total_row = $statement->rowCount();

	$output = '
		<table class="table table-striped table-bordered">
			<tr>
				<th>No.</th>
				<th>E-mail</th>
				<th>Phone</th>
				<th>Lastname</th>
				<th>Firstname</th>
				<th>ISO/Country</th>
			</tr>
	';

	if($total_row > 0) {
		foreach ($result as $row) {
			$output .= '
				<tr class="sugodnomero">
					<td></td>
					<td>'.$row["email"].'</td>
					<td>'.$row["phone"].'</td>
					<td>'.$row["lastname"].'</td>
					<td>'.$row["firstname"].'</td>
					<td>'.$row["country"].'</td>
				</tr>
			';
		}
	} else {
		$output .= '
			<tr>
				<td colspan="4" align="center">Data not found.</td>
			</tr>
		';
	}

	$output .= '</table>';

	echo $output;