<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "login";

	$con = mysqli_connect($server, $user, $password, $db);

	if ($con) {
		?>
		<script >
			alert("connection succesful");
		</script><?php
	}

	?>