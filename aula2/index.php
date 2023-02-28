<?php
    $dia =    @$_GET['dia']; 
    /*if ($dia==0)  {
      $dds = "Domingo";
    } else if ($dia==1) {
    $dds = "Segunda-feira"; 
    } else if ($dia==2) {
        $dds = "Terça-feira";
    } else if ($dia==3) {
        $dds = "Quarta-feira";
    } else if ($dia==4) {
        $dds = "Quinta-feira";
    } else if ($dia==5) {
        $dds = "Sexta-feira";
    } else if ($dia==6) {
        $dds = "Sábado";
    }  else $dds ="Dia inválido";*/
    switch ($dia) {
        case 0: $dds = "Domingo"; break;
        case 1: $dds = "Segunda"; break;
        case 2: $dds = "Terça"; break;
        case 3: $dds = "Quarta"; break;
        case 4: $dds = "Quinta"; break;
        case 5: $dds = "Sexta"; break;
        case 6: $dds = "Sábado"; break;
        default: $dds= "Dia inválido";
    }
    echo "O dia da semana é $dds"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional</title>
</head>
<body>
    <h1>Seletor Switch Case</h1>
   <form>
          Dia <input type="number" name="dia">
       <p><input type="submit">
   </form>
</body>
</html>