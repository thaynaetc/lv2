<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid pink;
            width: 100px;
        
        }
    </style>
</head>
<body>
    <?php
        $alunos = array(
             array("nome"=> "Maria", "idade"=>12, "cpf"=>"123"),
             array("nome"=> "Pedro", "idade"=>20, "cpf"=>"456"),
             array("nome"=> "Lucas", "idade"=>30, "cpf"=>"789"),
        );
    ?>

    <h1>Alunos Cadastrados</h1>

    <table>
        <tr>
            <td>NOME</td>
            <td>IDADE</td>
            <td>CPF</td>
        </tr>
        <?php 
        foreach( $alunos as $a){ ?>
            <tr>
            <td> <?php echo $a['nome']?> </td>
            <td> <?php echo $a['idade']?> </td>
            <td> <?php echo $a['cpf']?> </td>
            </tr>
       <?php } ?>
    
    </table>
</body>
</html>