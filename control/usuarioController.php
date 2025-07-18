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

if ($tipo == "view_users") {
    $usuarios = $objPersona->verUsuarios();
    echo json_encode($usuarios);
}


