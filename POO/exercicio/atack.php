<?php
class Atack  {
     
   public $tipo;
   public $power;
   public $precisao;

   function __construct()
   {
    
   }


   function critical(){
      return rand(0,255)==255?2:1;
   }

    
}