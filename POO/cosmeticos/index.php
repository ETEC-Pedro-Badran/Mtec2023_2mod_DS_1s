<?php
   require('produtos_class.php');
   $brand_selecionado = null;
   $json = file_get_contents('produtos.json');
   $json_data = json_decode($json,true);
   $produtos = [];
   $marcas   = []; // vetor de marcas de maquiagem
   foreach($json_data as $pro) {
       $produto = new Product();
       $produto->fromJson($pro);
       array_push($produtos, $produto);
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
          <select>
              <option>Todas</option>
              
        <?php
         foreach($marcas as $marca) {
            echo  "<option>$marca</option>";
         }
        ?>      

          </select>  
       </div> 
   <?php
    
        foreach($produtos as $produto) {
            echo "<div class='anuncio'>".
            "<img src='$produto->image_link'>".
            "<p>$produto->name".
            "<p>$produto->brand".
            "<p>$produto->price".
            "</div>";
        }
    
   ?>
   </ul>
</body>
</html>
