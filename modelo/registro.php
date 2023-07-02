<?php

if(!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["celular"]) and !empty($_POST["correo"])) {
    
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"]; 
        $celular=$_POST["celular"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("INSERT INTO proveedor (id_proveedor,nombre,apellido,celular,correo) VALUES ($id, '$nombre', '$apellido', $celular,'$correo')");
        if ($sql==1) {
            echo'<div class="alert alert-success">Persona Registrada con exito </div>';
        } else {
            echo'<div class="alert alert-danger">Error al registrar </div>';

        }
    
    
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta incompleto</div>';
    }
# code...

}
?>