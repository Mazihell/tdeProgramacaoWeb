<?php

    $email = $_POST["email"];
    $password = $_POST["password"];
       
    //$_conn = new PDO('mysql:host=127.0.0.1;dbname=tdeprogramacaoweb', "root", "");
    //$_conn->prepare("INSERT INTO tb_nome (nome) VALUES ('MacosVeio')");
    //$_conn->exec();
    
    $con = mysqli_connect("localhost:3306","root","","tdeprogramacaoweb");
    $sql = mysqli_query($con, "SELECT email,password FROM tb_nome where email = '$email' and password = '$password'");
    $numRegistros = mysqli_num_rows($sql);

    if($numRegistros > 0){
        echo"<script language='javascript' type='text/javascript'>window.location.href='../paginas/pagina_validado.html';</script>";
    }else{
         //SE O LOGIN EXISTIR PORÉM A SENHA ESTIVER INCORRETA:
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.html';</script>";
    }

?>