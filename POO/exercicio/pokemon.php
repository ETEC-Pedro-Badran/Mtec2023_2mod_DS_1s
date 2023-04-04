<?php
class Pokemon {
    public $numero;
    public $nome;
    public $total;
    public $defesa;
    public $ataque;
    public $hp;
    public $spataque;
    public $spdefesa;

    
    public $level;
    public $atacks; // Lista de ataques que o pockemon;

    function __construct($numero, $nome, $total,$defesa,$ataque,$hp,$spAtaque,$spdefesa){
      $this->numero = $numero;
      $this->nome = $nome;
      $this->total = $total;
      $this->defesa = $defesa;
      $this->ataque = $ataque;
      $this->hp = $hp;
      $this->spataque = $spAtaque;
      $this->spdefesa = $spdefesa;
    }


    function atack($oponente,$atack){
      
      $critical = $atack->critical();
      $power = 0; // <<<< ????
      $dano = ((($critical*$this->level*2)/5)+2) * $power; 
    }



}

//https://bulbapedia.bulbagarden.net/wiki/Damage#Damage_calculation