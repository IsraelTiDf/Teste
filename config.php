<?php
	define('HOST','mysql');
	define('USER','root');
	define('PASSWORD','root');
	define('DATABASE','projeto');

	$conn = new MySQLi(HOST,USER,PASSWORD,DATABASE);

	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>