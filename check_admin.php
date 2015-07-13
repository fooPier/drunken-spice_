<?php
	$nome = $_POST['nome'];
	$password = $_POST['password'];
	require_once('connect.php');
	$query="SELECT * FROM dynamic_ids.admin";
	$response=@mysqli_query($db, $query);
	$row = mysqli_fetch_array($response);
	if($nome == $row['nome'] AND $password == $row['password']) {
		header("location: panel.html");
	} else {
		echo "Username o Password sbagliata. Reinderizzamento alla pagina di login in 5 secondi.";
		sleep(5);
		header("login_administrator.php");
	}
	mysqli_close($db);
?>