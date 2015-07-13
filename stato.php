<?php
	require_once('connect.php');
	$numero=$_POST['numero'];
	$query = "SELECT * FROM dynamic_ids.ticket WHERE ID='$numero'";
	$response = @mysqli_query($db, $query);
	$row = mysqli_fetch_array($response);
	
	$nome = $row['nome'];
	$desc = $row['descrizione'];
	mysqli_close($db);
?>
<div id="ticket_guarda">
	<table border="15">
		<tr>
			<td>
				<?php echo $nome . "<br>"?> 
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $desc . "<br>"?> 
			</td>
		</tr>
	</table>
</div>
	