<?php
    include("conexion.php");
?>

<form action="" method="post">
    id_categoria=<input name="id"><br />
    nombre: <input name="nom"><br />
    descripción: <input apellido="des">br />>
    <input type="submit" />

</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["id"];
        $n=$POST["nom"];
        $n=$POST["des"];
        mysql_query(insert into categoria"(nombre,apellido,descripcion)" or die(mysq_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>