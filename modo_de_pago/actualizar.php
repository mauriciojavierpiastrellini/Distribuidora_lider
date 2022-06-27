<?php
    include("conexion.php");
    $con=mysqli_query("select *from modo_de_pago");
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
    <select ochange="eliminar()" name="modo_de_pago">
        <?php
            do{
                $num=$reg['num'];
                $fecha=$reg['fecha'];
        ?>
        
        <option value="<?php echo $num; ?>" ><?php echo $nom; ?></option>
        <?php
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
</form>
<?php
    if(isset($post['modo_de_pago'])){
        $c=$post['modo_de_pago'];
        mysqli_query("delete from modo_de_pago where id='$c'"or die(mysq_erorr));
        echo "<script>alert('dato eliminado') location='eliminar.php'</script>";
    }
?>