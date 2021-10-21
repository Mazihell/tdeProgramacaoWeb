<?php

    $con = mysqli_connect("localhost:3306","root","","tdeprogramacaoweb");

    mysqli_query($con, "INSERT INTO tb_nome (nome) VALUES ('Anderson')");

?>
