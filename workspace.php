<html>

<?php

	echo 'baller';

	$in_username = 'ballerboy';

	$dbhandle = new SQLite3('masterdb.sqlite');
	$results = $dbhandle->query("SELECT id, username, password FROM login_info WHERE username='$in_username' LIMIT 5");

	while ($row = $results->fetchArray()) {
		var_dump($row);
		echo 'row!';

		#echo "Row selected: ", $row;

	}

?>

</html>