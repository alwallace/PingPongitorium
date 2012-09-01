<?php
	$dbhandle = sqlite_open('masterdb.sqlite');
	$loginquery = sqlite_exec($dbhandle, "SELECT id, username, password FROM login_info WHERE username='$in_username' LIMIT 5", $error);
	if (!$loginquery) {
		exit("Error in query: '$error'");
	} else {
		$result = sqlite_fetch_all($loginquery, SQLITE_ASSOC)

		echo "Number of row selected: ", sqlite_changes($rows_returned);

	}
?>