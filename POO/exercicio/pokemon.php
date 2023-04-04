<?php
class Pokemon {
    public $numero;
    public $nome;
    public $total;
    
    
    public $level;
    public $atacks; // Lista de ataques que o pockemon;


    function atack($oponente,$atack){
      
      $critical = $atack->critical();
      $power = ?;
      $dano = ((($critical*$this->level*2)/5)+2)  
    }



}

//https://bulbapedia.bulbagarden.net/wiki/Damage#Damage_calculation