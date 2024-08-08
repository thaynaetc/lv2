<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>
    <form action="recebeDados.php" method="get">
      Nome:  <input type="text" name="nome" required><br>
      Senha: <input type="password" name="senha"><br><br>
      Cor:   <input type="color" name="cor"><br> <br>
      Data de nascimento: <input type="date" name="dataNas"> <br><br>
      Email: <input type="email" name="email"><br>
      Curso: <br>
      TI <input type="radio" name="curso" value="ti">
      TA <input type="radio" name="curso" value="ta">
      TL <input type="radio" name="curso" value="tl"><br><br>
      Disciplinas: <br>
      Redes <input type="checkbox" name="disc[]" value="redes">
      LV2   <input type="checkbox" name="disc[]" value="lv2">
      POO   <input type="checkbox" name="disc[]" value="poo"><br><br>
      Estado: <select name="estado"><br>
        <option value="">selecione</option>
        <option value="df">DF</option>
        <option value="mg">MG</option>
        <option value="go">GO</option>
        </select><br><br>
        Observação: <br>
        <textarea name="obs" cols="30" rows="5"></textarea><br><br>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>