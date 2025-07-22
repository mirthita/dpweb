function validar_form() {
    let nro_documento = document.getElementById("nro_doc").value;
    let razon_social = document.getElementById("Razon_social").value;
    let telefono = document.getElementById("Telefono").value;
    let correo = document.getElementById("correo").value;
    let departamento = document.getElementById("Departamento").value;
    let provincia = document.getElementById("Provincia").value;
    let distrito = document.getElementById("distrito").value;
    let cod_postal = document.getElementById("Codigo_postal").value;
    let direccion = document.getElementById("Direccion").value;
    let rol = document.getElementById("Rol").value;
    if (nro_documento === "" || razon_social === "" || telefono === "" || correo === "" || departamento === "" || provincia === ""
        || distrito === "" || cod_postal === "" || direccion === "" || rol === "") {
        alert("Error: Existen Campos vacios");
        return;
    }
    registrarUsuario();
}

if (document.querySelector('#frm_user')) {
    //evita que se envie el formulario
    let frm_user = document.querySelector('#frm_user');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_form();
    }

}

async function registrarUsuario(params) {
    try {
        //capturar campos de formularios (HTML);
        const datos = new FormData(frm_user);
        //enviar datos a controlador 
        let respuesta = await fetch(bd_url + 'control/usuarioController.php? tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        let json = await respuesta.json();
        //validamos que json.status sea = true
        if (json.status) {
            alert(json.msg);
            document.getElementById('frm_user'), reset();
        } else {
            alert(json.msg);
        }
    } catch (e) {
        console.log("Error al registrar usuario:" + e);
    }
}

async function iniciar_sesion() {
    let usuario = document.getElementById("username").value;//obtiene los valores del login
    let password = document.getElementById("password").value;
    if (usuario == "" || password == "") {
        alert("Error, campos vacios!");
        return;
    }
    try {
        const datos = new FormData(form_login);
        let respuesta = await fetch(bd_url + 'control/UsuarioController.php?tipo=iniciar_sesion', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        //--------------------------
        let json = await respuesta.json();
        //validamos que json.status sea = true
        if (json.status) { //true
            location.replace(bd_url + 'new-user');
        } else {
            alert(json.msg);
        }

    } catch (error) {
        console.log(error);
    }
}


async function ver_usuarios() {
    try {
        let respuesta = await fetch(bd_url + 'control/UsuarioController.php?tipo=ver_usuarios', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        let json = await respuesta.json(); 
        let content_users = document.getElementById('content_users');
        content_users.innerHTML = ''; 

        json.forEach((user, index) => {
            let fila = document.createElement('tr');
            fila.innerHTML = `
                <td>${index + 1}</td>
                <td>${user.nro_identidad}</td>
                <td>${user.razon_social}</td>
                <td>${user.correo}</td>
                <td>${user.rol}</td>
                <td>${user.estado}</td>
                <td>
                <a href="`+ bd_url+`edit_user/`+user.id+`"> Editar </a>
                </td>
            `;
            content_users.appendChild(fila);
        });
    } catch (error) {

    }
}
if (document.getElementById('content_users')) {
    ver_usuarios();
}





