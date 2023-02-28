<?php
    $nome =    @$_GET['nome'];
    $idade =   @$_GET['idade'];
    $dirigir =0;

    if ($idade >= 18) {
        echo " $nome já pode dirigir com $idade anos.";    
    } else {
        $dirigir = 18 - $idade;
        echo " $nome poderá dirigir daqui a $dirigir anos.";    
    }
    
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