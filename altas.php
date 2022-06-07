<?php
    include("conexion.php");
    con=mysql_query("select *from clientes");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post">
    id_cliente=<input name="id"><br />
    nombre: <input name="nom"><br />
    apellido: <input apellido="ape">br />>
    dni: <input dni="dni" ><br />
    fecha_nac <input fecha_nac= "fecha"> <br />
    correo_electronico <input correo_electronico= "correo"> <br />
    telefono <input telefono= "telefono"> <br />
    domicilio <input domiclio= "dom"> <br />
    <input type="submit" />

</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["id"];
        $n=$POST["nom"];
        $n=$POST["ape"];
        $n=$POST["dni"];
        $n=$POST["fecha"];
        $n=$POST["correo"];
        $n=$POST["felefono"];
        $n=$POST["dom"];
        mysql_query(insert into clientes"(nombre,apellido,dni,fecha_nac,correo,telefono,domicilo)" or die(mysq_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>