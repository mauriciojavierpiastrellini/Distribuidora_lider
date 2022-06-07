<?php
    function conectar{

        $user=$root;
        $pass="";
        $server="localhost";
        $db="facilito.php";
        $con=mysql_connect($localhost,$user,$pass) or die("error al conectar a la base de datos".mysql_error());
        mysql_selec_db($db,$con);

        return $con;
    }