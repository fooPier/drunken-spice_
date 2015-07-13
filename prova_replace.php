<?php

$STRING = '<input type="text" name="_NAME" placeholder="_PLACEHOLDER" />';
$STRING = str_replace("_NAME", "email", $STRING);
$STRING = str_replace("_PLACEHOLDER", "inserisci l'e-mail",  $STRING);
echo $STRING;

?>