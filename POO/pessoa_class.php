<?php
  class Pessoa {
    public $nome;
    public $telefone;
    public $foto;

    function imprimir(){
        return "$this->nome - $this->telefone";
    }
  }
?>