<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from proveedor where id_proveedor=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success">Proveedor eliminado</div>';
    }else{
        echo '<div>Error</div>';
    }
}
?>