<?php
    include("conexion.php");
    $con=mysql_query("select *from categoria");
    $reg=mysql_fech_array($con);
?>

<form action="" method="post"></form>
    <select name="categoria";>
        <?php
            do{
                $id=$reg['id'];
                $nombre=$reg['nombre'];
                $descripcion=$reg['descripcion'];
        ?>
        <option value=<?php echo $nombre?> <?php echo $descripcion?>
        </option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
    <input type="sumit" name="actu" value="actualizar"/>
</form>
<?php
    if($_POST['actu']){
        $categoria=$_post['categoria'];
        $con1=mysql_query("select *from categoria where id'$categoria'") or die(mysql_error());
        $reg1=mysql_fech_array($con1);
    }
    $reg1=mysql_fech_array($con1);
    $nombre=$reg1=['nombre'];
    $descripcion=$reg1=['descripcion'];
?>
<form method="post">
    nombre:<input name="nombre" value=<?php echo $nombre?>><br />
    descripcion:<input name="descripcion" value=<?php echo $descripcion?>> <br />
    <input type="hidden" name="id" value= <?php echo "$categoria"?> />
    <input type="submit" name="actufinal />
</form>
<?php
    if(isset($_post['actualizar'])){
        $id=$post['id'];
        $nombre=$post['nombre'];
        $descripcion=$post['descripcion'];
        mysql_query("update clientes set nombre=$nombre,descripcion=$descripcion" where id)or die (mysql_connect);
        echo "<scirpt>alert"('datos actualizar')</script>
    }
?>