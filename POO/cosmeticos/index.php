<?php
   require('produtos_class.php');
   $json = file_get_contents('produtos.json');
   $json_data = json_decode($json,true);
   $produtos = [];
   foreach($json_data as $pro) {
       $produto = new Product();
       $produto->fromJson($pro);
   }

   var_dump(print_r($produto));



?>