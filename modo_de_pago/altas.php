<?php
    include("conexion.php");
?>

<form action="" method="post">
    num_pago:<input name="num_pago"><br />
    id_venta=<input name="id_v"><br />
    nombre: <input name="nom"><br />
    descripcion: <input descripcion="des"><br />
    <input type="submit" />

</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["num_pago"];
        $n=$post["id_v"]
        $n=$POST["nom"];
        $n=$POST["des"];
        mysqli_query("insert into producto values"("id_venta,nombre,descripcion") or die(mysqli_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>