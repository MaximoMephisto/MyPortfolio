<?php 

session_start();

include '../conn.php';

$username = $_POST['txtUsername'];
$userpass = $_POST['txtPass'];
$userpass = hash('sha512', $userpass);

$validation = mysqli_query($conn,
    "SELECT 
        username,
        userpass
    FROM admin
    WHERE username = '$username'
    AND userpass = '$userpass'"
);

if (mysqli_num_rows($validation) > 0) {
    $_SESSION['admin'] = $username;
    header("Location: ../administration/panel");
    exit();
} else {
    echo '
    <script>
        alert("Incorrect data");
        window.location = "../index";
    </script>';
    exit();
}

?>