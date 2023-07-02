<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["celular"]) and !empty($_POST["correo"])){

        $id=$_POST["id"];      
        $nomre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $celular=$_POST["celular"];
        $correo=$_POST["correo"];
        $sql=$conexion->query(" UPDATE proveedor SET nombre='$nomre', apellido='$apellido', celular=$celular, correo='$correo' WHERE id_proveedor=$id");
        if ($sql==1){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Error</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }

}
?>