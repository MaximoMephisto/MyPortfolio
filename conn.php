<?php 

$conn = mysqli_connect("localhost", "root", "", "portfolio");

if ($conn) {
    echo "Conexion satisfactoria";
} else {
    echo "Error";
}

?>