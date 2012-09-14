<html>

<?php

	$in_username = $_POST['CreateUsername'];
	$in_password = $_POST['CreatePassword'];
	$in_confirm_password = $_POST['CreateConfirmPassword'];
	$in_fullname = $_POST['CreateName'];
	$in_email = $_POST['CreateEmail'];
	$in_phone = $_POST['CreatePhone'];

	$split = explode(' ', $in_fullname);

	if (sizeof($split) > 1) {
		$in_firstname = $split[0];
		$in_lastname = $split[1];
	} else {
		$in_firstname = $in_fullname;
		$in_lastname = '';
	}

	$dbhandle = new SQLite3('masterdb.sqlite');
	$dbhandle->exec("INSERT INTO login_info (username, password) VALUES ('$in_username', '$in_password')");
	$last_row_id = $dbhandle->lastInsertRowID();
	$dbhandle->exec("INSERT INTO user (login_info_id, first_name, last_name, email_address, phone_number) VALUES ('$last_row_id', '$in_firstname', '$in_lastname', '$in_email', '$in_phone')");


	# forward to the account page after user creation
	header("Location: UAMedPingPongitoriumHome.html");
?>

</html>