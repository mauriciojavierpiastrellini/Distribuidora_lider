<?php
    include("conexion.php");
    con=mysql_query("select *from categoria");
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
    <select ochange="eliminar()" name="categoria">
        <?php
            do{
                $id=$reg['id'];
                $nom=$reg['nombre'];
        ?>
        
        <option value="<?php echo $id; ?>" ><?php echo $nom; ?></option>
        <?php--
            }while($reg=mysql_fech_array($con));
        ?>
    </select>
</form>
<?php
    if(isset($post['categoria'])){
        $c=$post['categoria'];
        mysql_query("delete from categoria where id='$c'"or die(mysq_erorr));
        echo "<script>alert('dato eliminado') location='eliminar.php'</script>";
    }
?>