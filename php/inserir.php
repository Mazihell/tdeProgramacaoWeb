<?php

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordconfirm = $_POST['passwordconfirm'];

   
    //$_conn = new PDO('mysql:host=127.0.0.1;dbname=tdeprogramacaoweb', "root", "");
    //$_conn->prepare("INSERT INTO tb_nome (nome) VALUES ('MacosVeio')");
    //$_conn->exec();

    
    $con = mysqli_connect("localhost:3306","root","","tdeprogramacaoweb");
    mysqli_query($con, "INSERT INTO tb_nome (nome,sobrenome,email,password,passwordconfirm) VALUES ('$nome','$sobrenome','$email','$password','$passwordconfirm')");


?>