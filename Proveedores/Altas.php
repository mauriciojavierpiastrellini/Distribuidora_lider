<?php
    include("conexion.php");
    con=mysql_query("select *from proveedores");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post">
    id_cliente=<input name="id"><br />
    nombre: <input name="nom"><br />
    apellido: <input apellido="ape">br />>
    domicilio <input domiclio= "dom"> <br />
    telefono <input telefono= "telefono"> <br />
    <input type="submit" />

</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["id"];
        $n=$POST["nom"];
        $n=$POST["ape"];
        $n=$POST["dom"];
        $n=$POST["felefono"];
        mysql_query(insert into proveedores"(nombre,apellido,domicilo,telefono)" or die(mysq_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>