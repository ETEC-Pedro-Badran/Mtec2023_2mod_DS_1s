<?php
   require('produtos_class.php');
   $brand_selecionado = @$_GET['brand']; //1 <<<< Esta vai ser a variável que 
   // que irá armazenar a marca escolhida

   //4 <<< Obtendo o parametro brand, a partir da requisição. O @ evita erros caso o parametro não
   //tiver sido informado
   

   $json = file_get_contents('produtos.json');
   $json_data = json_decode($json,true);
   $produtos = [];
   $marcas   = []; // vetor de marcas de maquiagem
   foreach($json_data as $pro) {
        $produto = new Product();
        $produto->fromJson($pro);
        if ($produto->brand==$brand_selecionado) { //5 - Verifica SE o produto tem a marca selecionada
            array_push($produtos, $produto); // e só assim adiciona no vertor de produtos
        }
        if (!in_array($produto->brand,$marcas)) { 
            
            array_push($marcas,$produto->brand);
        }
        
   }
   sort($marcas); // ordena o vetor 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mackup</title>
    <style>
        .container {
            width: 80%;
            text-align: center;
        }

        .anuncio {
            display: inline-block;
            width: 150px;
            height: 100px;
            margin-right: 2px;
        }
        img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
       <div>  

        <form>

          <select name="brand" onchange="form.submit();"> <!-- 3 <<<< -->
              <option>Todas</option>
        <!-- form.submit é um método do framwork form do javascript que permite,entre
        outras coisas, realizar uma requisição com os dados do formuário como se eu 
        estivesse clicando no botão de "enviar' -->
        <?php
         foreach($marcas as $marca) {
            echo  "<option>$marca</option>";
         }
        ?>      

          </select>  
        </form>
       </div> 
   <?php
      if ($brand_selecionado!=null)  { //2- Se não estiver nullo,
                                       //ou seja, se a marca foi escolhida, 
                                       // mostre os produtos
            foreach($produtos as $produto) {
                echo "<div class='anuncio'>".
                "<img src='$produto->image_link'>".
                "<p>$produto->name".
                "<p>$produto->brand".
                "<p>$produto->price".
                "</div>";
            }
        } else { //3- caso contrário - Mostre uma mensagem para o usuário selecionar uma marca
           echo "<h1>Selecione uma marca</h1>";
        }
    

    
   ?>
   </ul>
</body>
</html>
