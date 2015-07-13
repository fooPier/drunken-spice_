<?php
require_once('get_values.php');
/* $bg_color;
 * $border_type
 * $border_color
 * $border_radius
 * $border_thickness
 */
require_once('get_form.php');
/*
 * form
 */
?>
<html>
<head>
	<title> Ticket </title>
</head>
<body style='background-color: <?php echo $bg_color;?>'>
	<div style='position: fixed; top: 50%; left: 50%; transform: translate(-50%,-50%); border-color: <?php echo $border_color;?>; border-width: <?php echo $border_thickness;?>; border-style: <?php echo $border_type;?>; border-radius: <?php echo $border_radius;?>; background-color: #FFFFFF; padding: 10px;'>
		<?php
		ob_start();
		eval("?>$form");
		$form_complete = ob_get_clean();
		echo $form_complete;
		?>
    </div>
	<div id="login">Hai già inviato il tuo ticket? Esegui il login <a href="login.html">ORA</a></div>
	<div id="administrator">Sei un amministratore? Accedi <a href="login_administrator.html">ORA</a></div>
</body>
</html>