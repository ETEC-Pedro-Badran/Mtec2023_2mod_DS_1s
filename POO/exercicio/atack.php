<?php
require "movimento.php";
class Atack  {
     

   public $tipo;
   public Movimento $movimento;
   
   

   function __construct()
   {
    
   }


   function critical(){
      return rand(0,255)==255?2:1;
   }


   
    
}