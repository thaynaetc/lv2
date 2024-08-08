<?php 
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $dataNascimento= $_GET['dataNas'];
    $cor = $_GET['cor'];
    $curso= $_GET['curso'];
    $disciplina= $_GET['disc'];
    $estado= $_GET['estado'];
    $observaçao= $_GET['obs'];

    $senha= md5($_GET['senha']);
    echo "<br><pre>";
    var_dump($nome,$email,$cor,$dataNascimento,$curso,$estado,$observaçao,$senha);
    print_r($disciplina);
    
    
    
?>