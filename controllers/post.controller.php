<?php
require_once "models/post.model.php";
    class postController
    {
    
        static public function agregarEstudiantes($id, $nombre, $apellido, $correo, $edad)
        {   
            return postModel::agregarEstudiantes($id, $nombre, $apellido, $correo, $edad);
        }
    }