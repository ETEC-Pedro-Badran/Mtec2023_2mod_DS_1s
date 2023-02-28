<?php
    $nome =    $_GET['nome'];
    $idade =   $_GET['idade'];
    echo "O aluno $nome tem $idade anos.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
   <form>
          Nome <input type="text" name="nome">
       <p>Idade <input type="number" name="idade">
       <p><input type="submit">
   </form>
</body>
</html>