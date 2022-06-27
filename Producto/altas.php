<?php
    include("conexion.php");
?>

<form action="" method="post">
    id_producto:<input name="id_p"><br />
    id_categoria=<input name="id_c"><br />
    nombre: <input name="nom"><br />
    precio: <input precio="pre"><br />
    stock: <input stock="stock"><br />
    marca: <input marca="marca"><br />
    <input type="submit" />

</form>

<?php
    if($post){//si se ha presionado enviar
        $n=$POST["id_p"];
        $n=$post["id_c"]
        $n=$POST["nom"];
        $n=$POST["pre"];
        $n=$post["stock"];
        $n=$post["marca"];
        mysqli_query("insert into producto values"("id_categoria,nombre,precio,stock,marca") or die(mysqli_erorr()));
        echo "<h2>Dato guardado</h2>";
    }
?>