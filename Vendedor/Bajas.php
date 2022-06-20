<?php
    include("conexion.php");
    con=mysql_query("select *from vendedor");
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
    <select ochange="eliminar()" name="vendedor">
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
    if(isset($post['vendedor'])){
        $c=$post['vendedor'];
        mysql_query("delete from vendedor where id='$c'"or die(mysq_erorr));
        echo "<script>alert('dato eliminado') location='eliminar.php'</script>";
    }
?>