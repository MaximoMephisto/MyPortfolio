<?php

include '../conn.php';

$name = $_POST['txtName'];
$mail = $_POST['txtMail'];
$reason = $_POST['txtReason'];
$message = $_POST['txtMessage'];
date_default_timezone_set("America/Argentina/Buenos_Aires");
$time = date('m-d-Y');
$query = 
    "INSERT INTO mensajes (
        name,
        mail,
        reason,
        message,
        time
    ) VALUES (
        '$name',
        '$mail',
        '$reason',
        '$message',
        '$time'
    );"
;

$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
    echo '<script>
        alert("Data sent successfully");
        window.location = "../contact"; 
    </script>';
} else {
    echo '<script>
        alert("Error, please check the data and try again")
        window.location = "../contact"; 
    </script>';
}


mysqli_close($conn);

?>