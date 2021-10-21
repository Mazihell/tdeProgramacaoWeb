<?php

    $con = mysqli_connect("localhost:3306","root","","tdeprogramacaoweb");

    $resultado = mysqli_query($con, "SELECT * FROM tb_nome");

    while($linha = mysqli_fetch_assoc($resultado)){

        echo $linha["cod_nome"].":";
        echo $linha["nome"]."<br>";
        
    }

?>