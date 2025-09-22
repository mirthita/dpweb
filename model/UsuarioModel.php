<?php
require_once("../library/conexion.php");
class UsuarioModel{
    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();

    }
    public function registrar($nro_doc, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password){
            $consulta = "INSERT INTO persona (nro_identidad, razon_social, telefono,correo, departamento, provincia, distrito, cod_postal, direccion, rol, password) VALUES ('$nro_doc', '$razon_social','$telefono','$correo','$departamento','$provincia','$distrito','$cod_postal','$direccion','$rol','$password')";
            $sql = $this->conexion->query($consulta);
            if ($sql) {
                $sql = $this->conexion->insert_id;
            }else {
                $sql = 0;
            }
            return $sql;

        }
    
    public function existePersona($nro_doc){
        $consulta="SELECT * FROM persona WHERE nro_identidad='$nro_doc'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
     public function buscarPersonaPorNroIdentidad($nro_identidad){
        $consulta = "SELECT id, razon_social, password FROM persona WHERE nro_identidad = '$nro_identidad' LIMIT 1";
        $sql = $this->conexion->query($consulta);
        return $sql->fetch_object();
    }
    //funcion para listar todos usuarios
    public function verUsuarios(){
        $arr_usuarios = array();
        $consulta = "SELECT * FROM persona";
        $sql = $this->conexion->query($consulta);
        while ($objeto = $sql->fetch_object()) {
            array_push($arr_usuarios, $objeto); //agregar cada usuario encontrado a un array
        }
        return $arr_usuarios;
    }
    public function ver($id){
        $consulta = "SELECT * FROM persona WHERE id = '$id'";
        $sql = $this->conexion->query($consulta);
        return $sql->fetch_object();
    }
    public function actualizar($id_persona, $nro_doc, $Razon_Social, $Telefono, $correo, $Departamento, $Provincia, $distrito, $Codigo_postal, $Direccion, $Rol){
        $consulta = "UPDATE persona SET nro_identidad='$nro_doc', razon_social='$Razon_Social', telefono='$Telefono', correo='$correo', departamento='$Departamento', provincia='$Provincia', distrito='$distrito', cod_postal='$Codigo_postal', direccion='$Direccion',Rol='$Rol' WHERE id = '$id_persona'";
        $sql = $this->conexion->query($consulta);
        return $sql;
    }
    
    public function eliminar($id_persona) {
    $consulta = "DELETE FROM persona WHERE id = '$id_persona'";
    $sql = $this->conexion->query($consulta);
    return $sql;
}
}








