<?php
    include("conexion.php");
    $con=mysql_query("select *from modo_de_pago");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post"></form>
    <select name="pedido";>
        <?php
            do{
                id_pedido: <input name="id_p"><br />
                id_cliente: <input name="id_c"><br />
                id_vendedor: <input apellido="id_v">br />>
                direccion_de_envio: <input dni="direccion_de_envio" ><br />
                fecha_nac <input fecha_nac= "fecha"> <br />
                cantidad <input cantidad= "cantidad"> <br />
        ?>
        <option value=<?php echo $nombre?> <?php echo $apellido?><?php echo $dni?><?php echo $fecha_nac?> <?php echo $correo_electronico?><?php echo $telefono?><?php echo $domicilo?>> 
    </option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
    <input type="sumit" name="actu" value="actualizar"/>
</form>
<?php
    if($_POST['actu']){
        $modo_de_pago=$_post['pedido'];
        $con1=mysql_query("select *from modo_de_pago where id'$modo_de_pago'") or die(mysql_error());
        $reg1=mysql_fech_array($con1);
    }
    $n=$POST["id"];
        $n=$POST["id_c"];
        $n=$POST["id_v"];
        $n=$POST["direccion_de_envio"];
        $n=$POST["fecha"];
        $n=$POST["cantidad"];
?>
<form method="post">
    id_clientes:<input name="id_cliente" value=<?php echo $id_clientes?>><br />
    id_vendedor:<input name="id_vendedor" value=<?php echo $id_vendedor?>> <br />
    fecha:<input name="fecha" value=<?php echo $fecha?>></br />
    cantidad:<input name="cantidad" value=<?php echo $cantidad?>> <br />
    <input type="hidden" name="id" value= <?php echo "$clientes"?> />
    <input type="submit" name="actufinal />
</form>
<?php
    if(isset($_post['actualizar'])){
        $n=$POST["id_p"];
        $n=$POST["nom"];
        $n=$POST["ape"];
        $n=$POST["dni"];
        $n=$POST["fecha"];
        $n=$POST["correo"];
        $n=$POST["felefono"];
        $n=$POST["dom"];
        mysql_query("update vendedor set id_pedido=$id_pedido,id_vendedor=$id_vendedor,fecha=$fecha,cantidad=$cantidad" where id)or die (mysql_connect);
        echo "<scirpt>alert"('datos actualizar')</script>
    }
?>