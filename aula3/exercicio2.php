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
          Ordenar Letras<br>
          <input type="text" name="lista">
       <p><input type="submit">
   </form>

   <?php
   if (isset($_GET['lista'])) { // Verifica se o valor já foi informado
        $lista = $_GET['lista']; // obtem os dados do parametro lista da requisição
        
        $letras = explode(",",$lista); // quebra a string em um vetor, 
                                      //  uma nova posição a cada ","
        
        $ordenada = false; // para indicar se o vetor já está ordenado
        while(!$ordenada) { // enquanto não estiver ordenado
            for($posicao = 0;$posicao<count($letras)-1;$posicao++) { // passa pelas posicoes de 0 até o tamanho do vetor -2
                $ordenada = true; // inicializa como ordenado
                if ($letras[$posicao]>$letras[$posicao+1]) { // verifica a posição par com a posição impar
                    
                    //** Ordena os valores desordenados
                    //
                    $letra = $letras[$posicao]; // armazena o valor anterior da posição par
                    $letras[$posicao] = $letras[$posicao+1]; // troca o valor da posição par pelo valor da posição impar
                    $letras[$posicao+1] = $letra; // colocar o valor da posição impar na posição par
                    $ordenada = false; // indica que o vetor não está ordenado
                    break; // para a execução do for
                }
            } 
        }

        // imprime a saída ordenada
        $saida = "";
        for($posicao = 0;$posicao<count($letras);$posicao++){
            $saida .= $letras[$posicao];
        }

        echo "As letras $lista ordenadas,<br> ficam dessa forma: $saida";
    }
        


    ?>

   
</body>
</html>