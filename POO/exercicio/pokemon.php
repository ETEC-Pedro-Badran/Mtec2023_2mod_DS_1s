<?php
require "atack.php";
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
    public $atacks = []; // Lista de ataques que o pockemon;
    public $movimentos = [];

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

    function getD(){
      return 0;
    }  
    function getA($atack){
      $stat = 0;
      if ($atack->movimento->type == TipoMovimento::Fisico) {
          $stat = $this->ataque;
      } if ($atack->movimento->type == TipoMovimento::Especial) {
          $stat = $this->spataque;
      }
      if ($this->getD()>255) {
        $stat/=4;
      }
      return $stat;
    }

    function atack($oponente,Atack $atack){
      
      $critical = $atack->critical();
      
      $a = 0;
      
      $dano = ((($critical*$this->level*2)/5)+2) * 
              $atack->movimento->power*
              $this->getA($atack);
    }
}

//https://bulbapedia.bulbagarden.net/wiki/Damage#Damage_calculation