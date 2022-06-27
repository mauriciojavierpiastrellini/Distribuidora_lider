<?php
    include("conexion.php");
    $con=mysql_query("select *from venta");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post"></form>
    <select name="venta";>
        <?php
            do{
                $id_v=$reg['id_v'];
                $id_f=$reg['id_f'];
                $id_p=$reg['id_p'];
                $fecha=$reg['fecha'];
                $tipo=$reg['tipo'];
                $serie=$reg['serie'];
        ?>
        <option value=<?php echo $id_f?><?php echo id_p?> <?php echo $fecha?><?php echo $tipo_comprobante?><?php echo serie?>
    </option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
    <input type="sumit" name="actu" value="actualizar"/>
</form>
<?php
    if($_POST['actu']){
        $clientes=$_post['venta'];
        $con1=mysql_query("select *from clientes where id'$venta'") or die(mysql_error());
        $reg1=mysql_fech_array($con1);
    }
    $reg1=mysql_fech_array($con1);
    $id_f=$reg1=['id_f'];
    $id_p=$reg1=['id_p'];
    $fecha=$reg1=['fecha'];
    $tipo=$reg1=['tipo_de_comprobante'];
    $serie=$reg1=['serie'];
?>
<form method="post">
    $id_f:<input name="id_f" value=<?php echo $id_f?>><br />
    $id_p:<input name="id_v" value=<?php echo $id_p?>> <br />
    fecha:<input name="fecha" value=<?php echo $fecha?>> <br />
    tipo:<input name="tipo" value=<?php echo $tipo?>> <br />
    serie:<input name="serie" value=<?php echo $serie?>><br />
    <input type="hidden" name="id" value= <?php echo "$venta"?> />
    <input type="submit" name="actufinal />
</form>
<?php
    if(isset($_post['actualizar'])){
        $id_venta=$post['id_v'];
        $id_factura=$post['id_f'];
        $id_producto=$post['id_p'];
        $fecha=$post['fecha'];
        $tipo_de_comprobante=$post['tipo'];
        $serie=$post["serie"];
        mysql_query("update factura set id_factura=$id_,id_producto=$id_producto,fecha=$fecha,tipo_de_comprobante=$tipo_de_comprante,serie=$serie where id)or die (mysql_connect);
        echo "<scirpt>alert"('datos actualizar')</script>
    }
?>