<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pokemons</title>
</head>
<body>
     <table border="1">
        
        <theader>
           <th>  
             Número   
           </th> 
           <th>  
             Nome   
           </th> 
           <th>  
             Total
           </th> 
        </theader>    
        


        <?php  
        require 'pokemon.php';
        $pokemons = [
            new Pokemon(1,'adfasdf',234),
            new Pokemon(2,'adfasdf',2345),
            new Pokemon(3,'asdafsdf',245),
        ]; 
        foreach($pokemons as $pokemon) { ?>
        <tr>   
          <td><?=$pokemon->numero?></td>
          <td><?=$pokemon->nome?></td>
          <td><?=$pokemon->total?></td>          
        </tr>   
        <?php  } ?>
     </table>

</body>
</html>