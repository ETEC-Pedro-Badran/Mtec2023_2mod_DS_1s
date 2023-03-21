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
          Digite valores separados por vírgula<br>
          <input type="text" name="valores">
       <p><input type="submit">
   </form>

   <?php
        $valorStr = @$_GET['valores'];
        $valores = explode(",",$valorStr);
        //var_dump($palavras);
        $soma = 0;        
        
        for($posicao = 0;$posicao<count($valores);$posicao++) {
            $soma +=  intval($valores[$posicao]);
            
        }
        echo "O total da soma dos valores $valorStr é igual a $soma ";

        

        // strlen comprimento da string
        // [x] onde x é posicao do caracter dentro da cadeia de caracterews


    ?>

   
</body>
</html>