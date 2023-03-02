<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição </title>
</head>
<body>
    <h1>Estrutura de Repetição While</h1>
    <h2>Trabalhando com Strings</h2>
   <form>
          Digite uma frase <input type="text" name="str">
       <p><input type="submit">
   </form>

   <?php
        $str   =    @$_GET['str']; 

        echo $str[strlen($str)-1]; 

        // strlen comprimento da string
        // [x] onde x é posicao do caracter dentro da cadeia de caracterews


    ?>

   
</body>
</html>