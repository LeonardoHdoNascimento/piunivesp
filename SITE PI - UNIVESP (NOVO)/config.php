<?php

  /*  if(isset: $_POST['cadastrar']) {
        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
    }

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'lhnengenharialhn';
    $dbName = 'formulario-sitepi';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if(!$conexao){
        dir("Conexão falhou" .mysqli_connect_error());
    }

    $sql = "INSERT INTO usuarios(nome, data_nasc, cidade, email, telefone, mensagem) 
    VALUES($nome, $data_nasc, $cidade, $email, $telefone, $mensagem)";

    $rs = mysqli_query($conexao, $sql);

    if($rs){
        echo "Cadastro efetuado com sucesso.";
    }

    //$dbHost = 'Localhost';
    //$dbUsername = 'root';
    //$dbPassword = 'lhnengenharialhn';
    //$dbName = 'formulario-sitepi'

    //$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else{
    //    echo "Conexão efetuada com sucesso";
    //}
?>