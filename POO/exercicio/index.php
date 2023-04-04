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
             Numero  
           </th>
           <th>  
             Nome
           </th>  
           <th>  
             Total
           </th> 
           <th>  
               HP
           </th> 
           <th>  
             Ataque  
           </th> 
           <th>  
             Defesa  
           </th> 
           <th>  
             Sp. Ataque  
           </th> 
           <th>  
             Sp. Defesa  
           </th> 
        </theader>    



        <?php  
        require 'pokemon.php';
        $pokemons = [
            new Pokemon(6,'Charizard',534,78,84,78,109,85),
            new Pokemon(25,'Pikachu',430,45,80,50,75,60),
            new Pokemon(658,'Greninja',530,72,95,67,103,71)
        ]; 
        foreach($pokemons as $pokemon) { ?>
        <tr>
          <td><?=$pokemon->numero?></td>
          <td><?=$pokemon->nome?></td> 
          <td><?=$pokemon->total?></td>  
          <td><?=$pokemon->hp?></td>
          <td><?=$pokemon->ataque?></td>
          <td><?=$pokemon->defesa?></td>
          <td><?=$pokemon->spataque?></td>
          <td><?=$pokemon->spdefesa?></td>      
        </tr>   
        <?php  } ?>
     </table>

</body>
</html>