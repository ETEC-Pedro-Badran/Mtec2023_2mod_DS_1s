<?php
   require('produtos_class.php');
   $brand_selecionado = @$_GET['brand']; 
   

   

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Mackup</title>
    <style>
        .cor {
            height: 18px;
            width: 18px;
            display: inline-block;
            margin-right: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=isset($brand_selecionado)?"Marca: $brand_selecionado":'Selecione um marca'?>
            </button>
            <ul class="dropdown-menu">
                <?php foreach($marcas as $marca) { ?>
                    <li><a class="dropdown-item" href=<?="?brand=$marca"?>><?=$marca?></a></li>
                <?php } ?>
            </ul>
        </div>
   <?php
      if ($brand_selecionado!=null)  { //2- Se não estiver nullo,
                                       //ou seja, se a marca foi escolhida, 
                                       // mostre os produtos
            echo "<div class='row justify-content-center'>";
            foreach($produtos as $produto) {

                echo "<div class='col-2 shadow-sm rounded p-3 mb-6'>".
                "<img  class='img-thumbnail' src='$produto->image_link'>".
                "<p>$produto->name".
                "<p>$produto->brand".
                "<p>$produto->price";

                echo "<div class='cores'>";
                foreach($produto->product_colors as $color) {
                  echo "<a href='#!'
                  data-bs-toggle='tooltip' data-bs-title='$color->colour_name'
                  ><div class='cor' style='background-color:$color->hex_value' 
                  ></div></a>";                     
                }
                echo "</div>"; // div class cor

                echo "</div>"; // div class cores
                
               //error_log( print_r($produto->product_colors,true),0);

            }
            echo "</div>"; // class row
        } else { //3- caso contrário - Mostre uma mensagem para o usuário selecionar uma marca
           echo "<h1>Selecione uma marca</h1>";
        }
   ?>
   </ul>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
   </script>      
</body>
</html>
