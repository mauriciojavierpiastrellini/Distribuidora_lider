<?php
    include("conexion.php");
    $con=mysql_query("select *from proveedores");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post"></form>
    <select name="proveedores";>
        <?php
            do{
                $id=$reg['id'];
                $nombre=$reg['nombre'];
                $apellido=$reg['apellido'];
                $domicilio=$reg['domicilio'];
                $telefono=$reg['telefono'];
        ?>
        <option value=<?php echo $nombre?> <?php echo $apellido?><?php echo $domicilio?> <?php echo $telefono?>
        </option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
    <input type="sumit" name="actu" value="actualizar"/>
</form>
<?php
    if($_POST['actu']){
        $categoria=$_post['proveedores'];
        $con1=mysql_query("select *from proveedores where id'$proveedores'") or die(mysql_error());
        $reg1=mysql_fech_array($con1);
    }
    $reg1=mysql_fech_array($con1);
    $nombre=$reg1=['nombre'];
    $apellido=$reg1=['apellido'];
    $domicilio=$reg1=['domicilio'];
    $telefono=$reg1=['telefono'];
?>
<form method="post">
    nombre:<input name="nombre" value=<?php echo $nombre?>><br />
    apellido:<input name="apellido" value=<?php echo $apellido?>> <br />
    domicilo:<input name="domicilio" value=<?php echo $domicilio?> <br />
    telefono:<input name="telefono" value=<?php echo $telefono?> <br />
    <input type="hidden" name="id" value= <?php echo "$proveedores"?> />
    <input type="submit" name="actufinal />
</form>
<?php
    if(isset($_post['actualizar'])){
        $id=$post['id'];
        $nombre=$post['nombre'];
        $apellido=$post['apellido'];
        $domicilio=$post['domicilo'];
        $telefono=$post['telefono'];
        mysql_query("update proveedores set nombre=$nombre,apellido=$apellido, domicilio=$domicilio, telefono= $telefono" where id)or die (mysql_connect);
        echo "<scirpt>alert"('datos proveedores')</script>
    }
?>