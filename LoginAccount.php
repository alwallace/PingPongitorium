<html>

<?php

	$in_username = $_POST['LoginUsername'];
	$in_password = $_POST['LoginPassword'];

	$dbhandle = new SQLite3('masterdb.sqlite');
	$results = $dbhandle->query("SELECT id FROM login_info WHERE username='$in_username' AND password='$in_password'");

	$row = $results->fetchArray();

	if ($row) {
		echo 'LOGGED IN!';
	} else {
		echo 'Fail.';
	}

	# forward to the account page after user creation
	header("Location: UAMedPingPongitoriumHome.html");
?>

</html>