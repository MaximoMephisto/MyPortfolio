<?php 

include '../conn.php';

$getMessages = "SELECT name, mail, reason, message, time FROM mensajes";
$mensajes = $conn->query($getMessages);

?>