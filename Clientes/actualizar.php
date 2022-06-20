<?php
    include("conexion.php");
    $con=mysql_query("select *from clientes");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post"></form>
    <select name="clientes";>
        <?php
            do{
                id_cliente= <input id_clientes="id"><br />
                nombre: <input name="nom"><br />
                apellido: <input apellido="ape">br />>
                dni: <input dni="dni" ><br />
                fecha_nac <input fecha_nac= "fecha"> <br />
                correo_electronico <input correo_electronico= "correo"> <br />
                telefono <input telefono= "telefono"> <br />
                domicilio <input domiclio= "dom"> <br />
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
        $clientes=$_post['clientes'];
        $con1=mysql_query("select *from clientes where id'$clientes'") or die(mysql_error());
        $reg1=mysql_fech_array($con1);
    }
    $n=$POST["id"];
        $n=$POST["nom"];
        $n=$POST["ape"];
        $n=$POST["dni"];
        $n=$POST["fecha"];
        $n=$POST["correo"];
        $n=$POST["felefono"];
        $n=$POST["dom"];
?>
<form method="post">
    nombre:<input name="nombre" value=<?php echo $nombre?>><br />
    apellido:<input name="apellido" value=<?php echo $apellido?>> <br />
    dni:<input name="dni" value=<?php echo $dni?>></br />
    fecha_nac:<input name="nombre" value=<?php echo $fecha_nac?>> <br />
    correo_electronico:<input name="nombre" value=<?php echo $correo_electronico?>> <br />
    telefono:<input name="nombre" value=<?php echo $telefono?>><br />
    domicilio:<input name="nombre" value=<?php echo $domicilo?>><br />
    <input type="hidden" name="id" value= <?php echo "$clientes"?> />
    <input type="submit" name="actufinal />
</form>
<?php
    if(isset($_post['actualizar'])){
        $n=$POST["id"];
        $n=$POST["nom"];
        $n=$POST["ape"];
        $n=$POST["dni"];
        $n=$POST["fecha"];
        $n=$POST["correo"];
        $n=$POST["felefono"];
        $n=$POST["dom"];
        mysql_query("update vendedor set nombre=$nombre,appellido=$apellido,dni=$dni,fecha_nac=$fecha_nac,telefono=$telefono,domicilo=$dom" where id)or die (mysql_connect);
        echo "<scirpt>alert"('datos actualizar')</script>
    }
?>