<?php

include '../conn.php';

$name = $_POST['txtName'];
$reason = $_POST['txtReason'];
$mail = $_POST['txtMail'];
$message = $_POST['txtMessage'];

$query = 
    "INSERT INTO mensajes (
        name,
        reason,
        mail,
        message
    ) VALUES (
        '$name',
        '$mail',
        '$reason',
        '$message'
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