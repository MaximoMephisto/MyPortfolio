const mysql = require('mysql')

const conection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'portfolio'
})

conection.connect( (err) => {
    if(err) throw err
    console.log('The conection has sussefully')
})


function sendData() {

    var correo = new FormData();

    correo.append("txtNombre", document.getElementById("txtNombre").value);
    correo.append("txtMail", document.getElementById("txtMail").value);
    correo.append("txtNombre", document.getElementById("txtNombre").value);
    correo.append("txtReason", document.getElementById("txtReason").value);
    correo.append("txtMessage", document.getElementById("txtMessage").value);
    
    const insert = "INSERT INTO mensajes (id,name) VALUES (NULL, '${name}'), (id,mail) VALUES (NULL, '${mail}'), (id,reason) VALUES (NULL, '${reason}'), (id,message) VALUES (NULL, '${message}')"

}

conection.query(insert, (err, rows) => {
    if(err) throw err
})

/*
conection.query('SELECT * from mensajes', (err, rows) => {
    if(err) throw err
    console.log('Data:')
    console.log(rows)
    console.log('Cant:')
    console.log(rows.lenght)
})
*/

conection.end()