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
   <form>
          Limite <input type="number" name="limite">
       <p><input type="submit">
   </form>

   <?php
        $limite   =    @$_GET['limite']; 
        $contador = 0;
        while($contador<=$limite) {
            echo "Não alcançou, valor $contador <br>";
            $contador++;
        }
        echo "ALCANÇOU $limite";
    ?>


</body>
</html>