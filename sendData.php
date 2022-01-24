<?php 

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {

    $name = $_POST["txtName"];
    $mail = $_POST["txtMail"];
    $reason = $_POST["txtReason"];
    $message = $_POST["txtMessage"];

    if (empty($mail)) {

        $error = 1;
        $mensaje = "Correo electronico vacio";
        $datos = 0;

    } else {

        $usuario_mail = "sorondomaximo1@gmail.com"; //Mail direction
        $remite = "Portfolio contact";
        $remite_email = "no-reply@example.com";
        $asunto = "Mail from: $remite";

        $msj = "<!DOCTYPE html>
        <html class=''>
        <head>
            <meta charset='UTF-8'>
            <title>Data</title>
        </head>
        <body>
            <h1>Data contact</h1> 
            <br>
            Nombre: ". $name ." <br clear='all'/>
            Correo: ". $mail ." <br clear='all'/>
            Correo: ". $reason ." <br clear='all'/>
            Correo: ". $message ." <br clear='all'/>
        </body>
        </html>";

        $cabeceras = "From: ". $remite ." <". $remite_email . ">\r\n";
        $cabeceras = $cabeceras."Mime-Version: 1.0\n";
        $cabeceras = $cabeceras.'Content-type: text/html; charset=uft-8' . "\r\n"; 

        $enviar_email = mail($usuario_mail, $name, $mail, $reason, $message, $cabeceras);

        if ($enviar_email) {
            $error = 0;
            $mensaje = "Data send successfuly";
            $datos = 0;
        } else {
            $error = 1;
            $mensaje = "Error";
            $datos = 0;
        }

    }

    $resp = [
        "error" => $error,
        "mensaje" => $mensaje,
        "datos" => $datos,
    ];

    echo json_encode($resp);

} else {
    $resp=[
        "error" => 1,
        "mensaje" => "Server error",
        "datos" => 0
    ];
    echo json_encode($resp);
}

?>