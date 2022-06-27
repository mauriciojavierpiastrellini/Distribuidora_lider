<?php
    function conectar(){

        $user="root";
        $pass="";
        $server="localhost";
        $db="distribuidora_lider";
        //$con=mysql_connect($server,$user,$pass) or die("error al conectar a la base de datos".mysql_error());
        //mysql_selec_db($db,$con);
        $con=mysqli_connect($server,$user,$pass,$db);
        return $con;
    }
?>