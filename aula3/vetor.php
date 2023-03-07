<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição </title>
</head>
<body>
    <h1>Estrutura de Repetição </h1>
    <h2>Trabalhando com Arrays</h2>
   <form>
          Digite uma frase <input type="text" name="frase">
       <p><input type="submit">
   </form>

   <?php
        $frase = @$_GET['frase'];
        $palavras = explode(" ",$frase);
        //var_dump($palavras);

        
        for($comprimento = count($palavras)-1;$comprimento>=0;$comprimento--) {
            echo $palavras[$comprimento]." "; 
        }

        

        // strlen comprimento da string
        // [x] onde x é posicao do caracter dentro da cadeia de caracterews


    ?>

   
</body>
</html>