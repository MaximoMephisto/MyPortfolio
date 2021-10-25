<?php 

include 'conection.php';

@$name = $_POST['txtName'];
@$mail = $_POST['txtMail'];
@$reason = $_POST['txtReason'];
@$message = $_POST['txtMessage'];

$query = "INSERT INTO mensajes(
    name,
    mail,
    reason,
    message
) VALUES (
    '$name',
    '$mail',
    '$reason',
    '$message'
);";

$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Data sent successfully");  
        window.location = "index";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Error trying to send data");
        window.location = "index";
    </script>
    ';
}

mysqli_close($conn);

?>