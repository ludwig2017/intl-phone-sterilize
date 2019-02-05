<div class="container">
	<div class="well">
		<h4>Leads</h4>
		<p>Communication leads to community, that is, to understanding, intimacy and mutual valuing.</p>
		<form method="post" enctype="multipart/form-data" action="resources/views/leads/uploadleads/index.php">
			<div class="form-group">
				<input type="file" name="file" class="btn btn-primary" style="display: inline-block;">
				<input type="submit" name="import" value="Import CSV file" class="btn btn-warning">
				<a href="resources/views/leads/tocleanleads/index.php" class="btn btn-default">Export to CSV</a>
				<a href="resources/views/leads/emptytable/index.php" class="btn btn-success">Empty Leads</a>
			</div>
		</form>
	</div>
	<div class="panel panel-default">
		<div class="table-responsive">
<?php

	include('../../../config/database.php');

	$query = "SELECT * FROM tbl_client_phone WHERE phone LIKE '447%' OR phone LIKE '442%' AND length(phone) = 12 ORDER BY phone ASC";

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
				<th>Firstname</th>
				<th>Lastname</th>
				<th>ISO/Country</th>
				<th>Country</th>
			</tr>
	';

	if($total_row > 0) {
		foreach ($result as $row) {
			$output .= '
				<tr class="sugodnomero">
					<td></td>
					<td>'.$row["email"].'</td>
					<td>'.$row["phone"].'</td>
					<td>'.$row["firstname"].'</td>
					<td>'.$row["lastname"].'</td>
					<td>GB</td>
					<td>United Kingdom</td>
				</tr>
			';
		}
	} else {
		$output .= '
			<tr>
				<td colspan="4" align="center">No records to be display.</td>
			</tr>
		';
	}

	$output .= '</table>';

	echo $output;
?>

		</div>
	</div>
	<div></div>
</div>