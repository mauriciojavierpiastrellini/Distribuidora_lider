<?php
    include("conexion.php");
    $con=mysqli_query("select *from pedido");
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
    <select ochange="eliminar()" name="pedido">
        <?php
            do{
                $id_v=$reg['id_p'];
                $id_f=$reg['id_c'];
                $id_p=$reg['direccion_de_envio'];
        ?>
        
        <option value="<?php echo $id_p; ?>" ><?php echo $direccon_de_envio; ?></option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
</form>
<?php
    if(isset($post['pedido'])){
        $c=$post['pedido'];
        mysqli_query("delete from venta where id_p='$c'"or die(mysq_erorr));
        echo "<script>alert('dato eliminado') location='eliminar.php'</script>";
    }
?>