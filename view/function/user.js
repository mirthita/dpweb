function validar_form(tipo) {
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
    if (tipo == "nuevo") {
    registrarUsuario();   
    }
        if (tipo == "actualizar") {
    actualizarUsuario();   
    }
    
}

if (document.querySelector('#frm_user')) {
    //evita que se envie el formulario
    let frm_user = document.querySelector('#frm_user');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_form("nuevo");
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
                <a href="`+ bd_url+`edit-user/`+user.id+`"> Editar </a>
                <button type="button" class="btn btn-danger" onclick="eliminarUsuario(`+ user.id+`)"> Eliminar </button>
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

async function edit_user() {
    try{
        let id_persona = document.getElementById('id_persona').value;
        const datos = new FormData();
        datos.append('id_persona', id_persona);

        let respuesta = await fetch(bd_url + 'control/UsuarioController.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (!json.status) {
            alert(json.msg);
            return;
        }
        document.getElementById('nro_doc').value = json.data.nro_identidad;
        document.getElementById('Razon_social').value = json.data.razon_social;
        document.getElementById('Telefono').value = json.data.telefono;
        document.getElementById('correo').value = json.data.correo;
        document.getElementById('Departamento').value = json.data.departamento;
        document.getElementById('Provincia').value = json.data.provincia;
        document.getElementById('distrito').value = json.data.distrito;
        document.getElementById('Codigo_postal').value = json.data.cod_postal;
        document.getElementById('Direccion').value = json.data.direccion;
        document.getElementById('Rol').value = json.data.rol;


    }catch(error){
        console.log('oops, que bruto pongale cero'+ error);
    }
}
if (document.querySelector('#frm_edit_user')) {
    //evita que se envie el formulario
    let frm_user = document.querySelector('#frm_edit_user');
    frm_user.onsubmit = function (e) {
        e.preventDefault();
        validar_form("actualizar");
    }
}

async function actualizarUsuario() {
    const datos = new FormData(frm_edit_user);
    let respuesta = await fetch(bd_url + 'control/UsuarioController.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (!json.status) {
            alert("oOoOps, ocurrio un error al actualizar, intente nuevamente");
            console.log(json.msg);
            return;
        }else{
            alert(json.msg);
        }
}
async function eliminarUsuario(id) {
    const datos = new FormData();
    datos.append('id_persona', id);
    if (!confirm("Estas seguro de eliminar este usuario?")) {
        return;
    }
    let respuesta = await fetch(bd_url + 'control/UsuarioController.php?tipo=eliminar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (!json.status) {
            alert("oOoOps, ocurrio un error al eliminar, intente nuevamente");
            console.log(json.msg);
            return;
        }else{
            alert(json.msg);
        }
    
}



