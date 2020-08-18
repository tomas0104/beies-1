<?php

require_once '../config/conexion.php';

class Usuario {

    public $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function ValidarUsuario($correo, $clave) {
        $query = ('SELECT * FROM usuario WHERE email = :correo');
        $base = $this->cnx->prepare($query);
        $base->bindParam(":correo", $correo, PDO::PARAM_STR);
        $base->execute();
        $fila = $base->fetch(PDO::FETCH_ASSOC);

        if (password_verify($clave, $fila['pass'])) {
            return $fila;
        }
        return false;
        $base->close();
    }

    public function RegistrarUsuario($datos) {
        $query = 'INSERT INTO usuario (nombre, apellido, usuario, pass, email, rol, estado_usuario, sede) VALUES ('
                . ':nombre, :apellido, :usuario, :pass, :email, :rol, :estado_usuario, :sede)';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':nombre', $datos['Nombres'], PDO::PARAM_STR);
        $base->bindParam(':apellido', $datos['Apellidos'], PDO::PARAM_STR);
        $base->bindParam(':usuario', $datos['Usuario'], PDO::PARAM_STR);
        $pass = password_hash($datos['Password'], PASSWORD_DEFAULT);
        $base->bindParam(':pass', $pass, PDO::PARAM_STR);
        $base->bindParam(':email', $datos['Email'], PDO::PARAM_STR);
        $base->bindParam(':rol', $datos['Rol'], PDO::PARAM_STR);
        $base->bindParam(':estado_usuario', $datos['Estado'], PDO::PARAM_STR);
        $base->bindParam(':sede', $datos['Sede'], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function EditarUsuario($datos) {
        $query = 'UPDATE usuario SET nombre = :nombre, 
                                     apellido = :apellido, 
                                     usuario = :usuario, 
                                     pass = :pass,
                                     email = :email, 
                                     rol = :rol, 
                                     estado_usuario = :estado_usuario, 
                                     sede = :sede WHERE 
                                     ID = :id';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':id', $datos['ID'], PDO::PARAM_INT);
        $base->bindParam(':nombre', $datos['Nombres'], PDO::PARAM_STR);
        $base->bindParam(':apellido', $datos['Apellidos'], PDO::PARAM_STR);
        $base->bindParam(':usuario', $datos['Usuario'], PDO::PARAM_STR);
        $password = password_hash($datos['Pass'], PASSWORD_DEFAULT);
        $base->bindParam(':pass', $password, PDO::PARAM_STR);
        $base->bindParam(':email', $datos['Email'], PDO::PARAM_STR);
        $base->bindParam(':rol', $datos['Rol'], PDO::PARAM_STR);
        $base->bindParam(':estado_usuario', $datos['Estado'], PDO::PARAM_STR);
        $base->bindParam(':sede', $datos['Sede'], PDO::PARAM_STR);
        if ($base->execute()) {
            return true;
        }
        $base->close();
        return false;
    }

    public function ObtenerID($id) {
        $query = ('SELECT ID, nombre, apellido, usuario, pass, email, rol, estado_usuario, sede FROM usuario WHERE ID = :ID');
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        $base->close();
        return false;
    }

    public function ListarUsuarios() {
        $query = ("SELECT ID, nombre FROM usuario order by ID");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            if ($base->rowCount() > 0) {
                while ($fila = $base->fetch(PDO::FETCH_ASSOC)) {
                    $datos[] = $fila;
                }
                return $datos;
            }
        }
        return false;
        $base->close();
    }

}

?>