<?php
    require_once('connect.php');
	$nome = $_POST["nome"];
	$descrizione = $_POST["descrizione"];
	$query="SELECT ID FROM dynamic_ids.ticket";
	$response=@mysqli_query($db, $query);
	$numero=3;
	do{
		$numero=rand(0,1000);
	}while(isOk($numero,$response));
	
    $sql = "INSERT INTO dynamic_ids.ticket (nome, descrizione, id) VALUES ('$nome', '$descrizione', '$numero')";
	
if (mysqli_query($db, $sql)) {
    echo "<div class='ticket'>Ticket correttamente inviato, il numero per vedere lo stato è $numero</div>";
} else {
    echo "Errore: " . mysqli_error($db);
}


mysqli_close($db);

function isOk($numero,$response) {
	while ($temp = mysqli_fetch_assoc($response)) {
		if($numero==$temp['ID'])
			return true;
	}
	return false;
}
?>