//npm init -y for the creation the package.json
//npm install mysql
function sendData() {

    var correo = new FormData();

    correo.append("txtNombre", document.getElementById("txtNombre").value);
    correo.append("txtMail", document.getElementById("txtMail").value);
    correo.append("txtNombre", document.getElementById("txtNombre").value);
    correo.append("txtReason", document.getElementById("txtReason").value);
    correo.append("txtMessage", document.getElementById("txtMessage").value);

    $.ajax({
        url:"sendData.php",
        type: "POST",
        data: correo,
        cache: false,
        contentType: false,
        processData: false,
        msj=JSON.parse(resp),
        success: function(resp){
            alert(msj.mensaje);
        }
    })

}