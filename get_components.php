<?php
require_once('connect.php');

$query_submit_button = "SELECT CODE FROM dynamic_ids.components WHERE COMPONENT='BUTTON'";
$query_textarea = "SELECT CODE FROM dynamic_ids.components WHERE COMPONENT='TEXT-MULTIPLE'";
$query_single_text = "SELECT CODE FROM dynamic_ids.components WHERE COMPONENT='TEXT-SINGLE'";

$response_textarea = @mysqli_query($db, $query_textarea);
$response_single_text = @mysqli_query($db, $query_single_text);
$response_submit_button = @mysqli_query($db, $query_submit_button);

$row_textarea = mysqli_fetch_array($response_textarea);
$row_single_text = mysqli_fetch_array($response_single_text);
$row_submit_button = mysqli_fetch_array($response_submit_button);

$textarea = $row_textarea['CODE'];
$single_text = $row_single_text['CODE'];
$submit_button = $row_submit_button['CODE'];
?>