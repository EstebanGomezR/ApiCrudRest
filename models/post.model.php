<?php
require_once "conexion.php";

class postModel
{   
    static public function agregarEstudiantes($id, $nombre, $apellido, $correo, $edad)
    {
        $sql = "INSERT INTO `estudiantes` (`id_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `correo_estudiante`, `edad`) 
                VALUES ('".$id."', '".$nombre."', '".$apellido."', '".$correo."', '".$edad."');";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            return "Agrego todo corrrectamente";
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
    static public function agregarProfesores()
    {
        $sql = "SELECT * FROM profesores";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            $results = $stmt-> fetchAll(PDO::FETCH_OBJ);
            return $results;
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
    

}