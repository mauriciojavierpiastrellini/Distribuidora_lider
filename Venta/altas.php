<?php
    include("conexion.php");
?>

<form action="" method="post">
    id_venta=<input name="id_v"><br />
    id_factura: <input name="id_f"><br />
    id_producto: <input id_producto="id_c">br />
    fecha <input fecha= "fecha"> <br />
    tipo_de_comprobante <input tipo_de_comprobante= "tipo"> <br />
    <input type="submit" />

</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["id_v"];
        $n=$POST["id_f"];
        $n=$POST["id_p"];
        $n=$post["fecha"];
        $n=$post["tipo"];
        mysqli_query("insert into venta id_factura,id_producto,fecha,tipo_de_comprobante)" or die(mysqli_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>