<?php
require_once('connect.php');

$query_bg = "SELECT VALUE FROM dynamic_ids.styles WHERE ID='BACKGROUND'";
$query_br_type = "SELECT VALUE FROM dynamic_ids.styles WHERE ID='BORDER-TYPE'";
$query_br_color = "SELECT VALUE FROM dynamic_ids.styles WHERE ID='BORDER-COLOR'";
$query_br_radius = "SELECT VALUE FROM dynamic_ids.styles WHERE ID='BORDER-RADIUS'";
$query_br_thickness = "SELECT VALUE FROM dynamic_ids.styles WHERE ID='BORDER-THICKNESS'";

$response_bg = @mysqli_query($db, $query_bg);
$response_br_type = @mysqli_query($db, $query_br_type);
$response_br_color = @mysqli_query($db, $query_br_color);
$response_br_radius = @mysqli_query($db, $query_br_radius);
$response_br_thickness = @mysqli_query($db, $query_br_thickness);

$row_bg = mysqli_fetch_array($response_bg);
$row_br_type = mysqli_fetch_array($response_br_type);
$row_br_color = mysqli_fetch_array($response_br_color);
$row_br_radius = mysqli_fetch_array($response_br_radius);
$row_br_thickness = mysqli_fetch_array($response_br_thickness);

$bg_color = $row_bg['VALUE'];
$border_type = $row_br_type['VALUE'];
$border_color = $row_br_color['VALUE'];
$border_radius = $row_br_radius['VALUE'];
$border_thickness = $row_br_thickness['VALUE'];
?>