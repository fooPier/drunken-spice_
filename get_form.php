<?php
require_once('get_components.php');

$query = "SELECT CODE FROM dynamic_ids.form";
$response = @mysqli_query($db, $query);
$row = mysqli_fetch_array($response);
$form = $row['CODE'];

mysqli_close($db);
?>