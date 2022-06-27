<?php
    include("conexion.php");
    con=mysql_query("select *from producto");
    $reg=mysql_fech_array($con);
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
    <select ochange="eliminar()" name="producto">
        <?php
            do{
                $id_producto=$reg=['id_p']
                $id_categoria=$reg['id_c'];
                $nom=$reg['nom'];
                $precio=$reg['pre'];
                $stock=$reg['stock'];
                $marca=$reg['marca'];
        ?>
        
        <option value="<?php echo $id_p; ?>"<?php echo $id_p; ?> ><?php echo $nom; ?></option>
        <?php--
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
</form>
<?php
    if(isset($post['producot'])){
        $c=$post['producto'];
        mysql_query("delete from producto where id='$c'"or die(mysq_erorr));
        echo "<script>alert('dato eliminado') location='eliminar.php'</script>";
    }
?>