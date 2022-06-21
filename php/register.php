<?php 

include '../conn.php';

$username = $_POST['txtUsername'];
$userpass = $_POST['txtUserpass'];
$userpass = hash('sha512', $userpass);

$query = 
    "INSERT INTO adminis (
        username,
        userpass
    ) VALUES (
        '$username',
        '$userpass'
    );"
;

$verification = mysqli_query($conn,
    "SELECT 
        username,
        userpass
    FROM adminis
    WHERE username = '$username'"    
);

if (mysqli_num_rows($verificacion) > 0 ) {
    echo '
    <script>
        alert("Error with user");
        window.location = "../index";
    </script>
    ';

    exit();
}

$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Registrado exitosamente");
        window.location = "../administration/panel";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Lamentamos no poder registrar el usuario, revise bien los datos");
        window.location = "../administration/panel";
    </script>
    ';
}

mysqli_close($conn);

?>