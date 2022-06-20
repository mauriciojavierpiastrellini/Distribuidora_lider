<?php
    include("conexion.php");
    $con=mysql_query("select *from vendedor");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post"></form>
    <select name="vendedor";>
        <?php
            do{
                $id=$reg['id'];
                $nombre=$reg['nombre'];
                $apellido=$reg['apellido'];
                $fecha_ingreso=$reg['fecha_ingreso'];
                $haber_basico=$reg['haber_basico'];
                $tipo_vendedor=$reg['tipo_vendedor'];
                $mostrador=$reg['mostrador']
        ?>
        <option value=<?php echo $nombre?> <?php echo $apellido?><?php echo $apellido?><?php echo $fecha_ingreso?><?php echo $haber_basico?> <?php echo $tipo_vendedor?><?php echo $mostrador?>> 
    </option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
    <input type="sumit" name="actu" value="actualizar"/>
</form>
<?php
    if($_POST['actu']){
        $clientes=$_post['vendedor'];
        $con1=mysql_query("select *from clientes where id'$clientes'") or die(mysql_error());
        $reg1=mysql_fech_array($con1);
    }
    $reg1=mysql_fech_array($con1);
    $nombre=$reg1=['nombre'];
    $apellido=$reg1=['apellido'];
    $dni=$reg1=['dni'];
    $fecha_nac=$reg1=['fecha_nac'];
    $correo_electronico=$reg1=['correo_electronico'];
    $domicilio=$reg1=['domicilo'];
?>
<form method="post">
    nombre:<input name="nombre" value=<?php echo $nombre?>><br />
    apellido:<input name="apellido" value=<?php echo $apellido?>> <br />
    dni:<input name="nombre" value=<?php echo $dni?>> <br />
    fecha_nac:<input name="nombre" value=<?php echo $fecha_nac?>> <br />
    correo_electronico:<input name="nombre" value=<?php echo $correo_electronico?>><br />
    domicilio:<input name="nombre" value=<?php echo $domicilio?>><br />
    <input type="hidden" name="id" value= <?php echo "$clientes"?> />
    <input type="submit" name="actufinal />
</form>
<?php
    if(isset($_post['actualizar'])){
        $id=$post['id'];
        $nombre=$post['nombre'];
        $apellido=$post['apellido'];
        $dni=$post['dni'];
        $fecha_nac=$post['fecha_nac'];
        $correo_electronico=$post['correo_electronico'];
        $domicilio=$post['domicilio'];
        mysql_query("update clientes set nombre=$nombre,appellido=$apellido,dni=$dni,fecha_nac=$fecha_nac,correo_ELECTRONICO=$correo_electronico,domicilio=$domicilio" where id)or die (mysql_connect);
        echo "<scirpt>alert"('datos actualizar')</script>
    }
?>