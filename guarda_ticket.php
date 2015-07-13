<?php
	require_once('connect.php');
	$query="SELECT * FROM dynamic_ids.ticket";
	$response=@mysqli_query($db, $query);
	?>
		<table id="ticket_guarda" border="11"> <?php
	while ($temp = mysqli_fetch_assoc($response)) {
		?>
			<tr>
				<td>
					<?php 
						echo $temp['nome'];
					?>
				</td>
				<td>
					<?php 
						echo $temp['descrizione'];
					?>
				</td>
				<td>
					<?php 
						echo $temp['id'];
					?>
				</td>
			</tr>
		<?php
	}
	?> </table> <?php
	mysqli_close($db);
?>