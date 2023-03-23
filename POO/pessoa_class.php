<?php
  class Pessoa {
    public $id;
    public $nome;
    public $telefone;
    public $foto;

    function __construct(){
      $this->id = 0;
      $this->nome = "Não atribuido";            
    }

    function imprimir(){
        return "$this->nome - $this->telefone";
    }
  }
?>