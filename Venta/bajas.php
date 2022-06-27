<?php
    include("conexion.php");
    $con=mysqli_query("select *from venta");
    $reg=mysqli_fech_array($con);
?>
<scipt>
    function eliminar(){
        if(confirm(Desea eliminar)){
            miform.submit();
        }else{
            alert("me salve")
        }
    }
</script>
<form method="post" name="miform">
    <select ochange="eliminar()" name="venta">
        <?php
            do{
                $id_v=$reg['id_v'];
                $id_f=$reg['id_f'];
                $id_p=$reg['id_p'];
                $fecha=$reg['fecha'];
        ?>
        
        <option value="<?php echo $id_f; ?>" ><?php echo $nom; ?></option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
</form>
<?php
    if(isset($post['venta'])){
        $c=$post['venta'];
        mysqli_query("delete from venta where id='$c'"or die(mysq_erorr));
        echo "<script>alert('dato eliminado') location='eliminar.php'</script>";
    }
?>