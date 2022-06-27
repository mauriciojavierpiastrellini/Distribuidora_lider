<?php
    include("conexion.php");
    $con=mysqli_query("select *from pedido");
    $reg=mysqli_fech_array($con);
?>

<form action="" method="post">
    id_pedido=<input name="id_p"><br />
    id_cliente=<input name="id_c"><br />
    id_vendedor=<input name="id_v"><br />
    direccion_de_envio:<input name="direccion"><br />
    fecha:<input fecha="fecha">br />>
    cantidad:<input cantidad="cantidad" ><br />
    <input type="submit" />
</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["id_p"];
        $n=$POST["id_c"];
        $n=$POST["id_v"];
        $n=$POST["direccion"];
        $n=$POST["fecha"];
        $n=$POST["cantidad"];
        mysqli_query(insert into modo_de_pago"(id_c,id_v,direccion_de_envio,fecha,cantidad)" or die(mysqli_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>