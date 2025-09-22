<?php
require_once("../model/UsuarioModel.php");

$objPersona = new UsuarioModel();

$tipo = $_GET['tipo'];

if ($tipo == "registrar") {
    //print_r($_POST);
    $nro_doc = $_POST['nro_doc'];
    $Razon_Social = $_POST['Razon_Social'];
    $Telefono = $_POST['Telefono'];
    $correo = $_POST['correo'];
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $distrito = $_POST['distrito'];
    $Codigo_postal = $_POST['Codigo_postal'];
    $Direccion = $_POST['Direccion'];
    $Rol = $_POST['Rol'];
    //ENCRIPTANDO NRO_DOC PARA UTILIZAR COMO CONTRASEÑA
    $password = password_hash($nro_doc, PASSWORD_DEFAULT);

    if ($nro_doc == "" || $Razon_Social == "" || $Telefono == "" || $correo == "" || $Departamento == "" || $Provincia == "" || $distrito == "" || $Codigo_postal == "" || $Direccion == "" || $Rol == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        //validamos si existe persona con el mismo dni
        $existePersona = $objPersona->existePersona($nro_doc);
        if ($existePersona > 0) {
            $arrResponse = array('status' => false, 'msg' => 'error, numero de documento ya existe');
        } else {
            $respuesta = $objPersona->registrar($nro_doc, $Razon_Social, $Telefono, $correo, $Departamento, $Provincia, $distrito, $Codigo_postal, $Direccion, $Rol, $password);

            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'Registrado Correctamente');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error, fallo en registro');
            }
        }
    }
    echo json_encode($arrResponse);
}
if ($tipo == "iniciar_sesion") {
    $nro_identidad = $_POST['username'];
    $password = $_POST['password'];
    if ($nro_identidad == "" || $password == "") {
        $respuesta = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        $existePersona = $objPersona->existePersona($nro_identidad);
        if ($existePersona == 0) {
            $respuesta = array('status' => false, 'msg' => 'Error, el usuario no existe');
        } else {
            $persona = $objPersona->buscarPersonaPorNroIdentidad($nro_identidad);
            if (password_verify($password, $persona->password)) {
                session_start();
                $_SESSION['ventas_id'] = $persona->id;
                $_SESSION['ventas_usuario'] = $persona->razon_social;
                $respuesta = array('status' => true, 'msg' => 'Bienvenido al sistema');
            } else {
                $respuesta = array('status' => false, 'msg' => 'Error, contraseña incorrecta');
            } 
        }
    }
    echo json_encode($respuesta);
}

if ($tipo == "ver_usuarios") {
    $usuarios = $objPersona->verUsuarios();
    echo json_encode($usuarios);

}

if ($tipo == "ver") {
    //print_r($_POST);
    $respuesta = array('status' => false, 'msg' =>''     );
    $id_persona = $_POST['id_persona'];
    $usuario = $objPersona->ver($id_persona);
    if ($usuario) {
        $respuesta['status'] = true;
        $respuesta['data'] = $usuario;
    }else{
        $respuesta['msg'] = 'Error, usuario no existe';
    }
    echo json_encode($respuesta);
}

if ($tipo == "actualizar") {
    //print_r($_POST);
    $id_persona = $_POST['id_persona'];
    $nro_doc = $_POST['nro_doc'];
    $Razon_Social = $_POST['Razon_Social'];
    $Telefono = $_POST['Telefono'];
    $correo = $_POST['correo'];
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $distrito = $_POST['distrito'];
    $Codigo_postal = $_POST['Codigo_postal'];
    $Direccion = $_POST['Direccion'];
    $Rol = $_POST['Rol'];

    if ($id_persona == ""|| $nro_doc == "" || $Razon_Social == "" || $Telefono == "" || $correo == "" || $Departamento == "" || $Provincia == "" || $distrito == "" || $Codigo_postal == "" || $Direccion == "" || $Rol == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        //validamos si existe persona con el mismo dni
        $existeId = $objPersona->ver($id_persona);
        if (!$existeId){
        $arrResponse = array('status' => false, 'msg' => 'Error, usuario no existe en base de datos');
        echo json_encode($arrResponse);
        exit;
        //cerrar funcion
        }else {
            //actualizar
            $actualizar = $objPersona->actualizar($id_persona, $nro_doc, $Razon_Social, $Telefono, $correo, $Departamento, $Provincia, $distrito, $Codigo_postal, $Direccion,$Rol);
            if ($actualizar) {
                $arrResponse = array('status' => true, 'msg' => 'actualizado correctamente');
            }else {
                $arrResponse = array('status' => false, 'msg' => $actualizar);
            }
            echo json_encode($arrResponse);
            exit;
        }
    }
}

if ($tipo == "eliminar") {
    $id_persona = $_POST['id_persona'];
    if ($id_persona == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, id vacío');
    } else {
        // validar si existe el usuario
        $existeId = $objPersona->ver($id_persona);
        if (!$existeId) {
            $arrResponse = array('status' => false, 'msg' => 'Error, usuario no existe en base de datos');
            echo json_encode($arrResponse);
            exit;
        } else {
            // eliminar
            $eliminar = $objPersona->eliminar($id_persona);
            if ($eliminar) {
                $arrResponse = array('status' => true, 'msg' => 'Usuario eliminado correctamente');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error al eliminar usuario');
            }
            echo json_encode($arrResponse);
            exit;
        }
    }
}





