<?php
   $nome = "Evaldo e Andrea";
   $data = (new DateTime())->format("d/m/y"); 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Básico</title>
</head>
<body>
   <h2><?php echo "Olá ".$nome."! Hoje é $data"; ?></h2>
</body>
</html>