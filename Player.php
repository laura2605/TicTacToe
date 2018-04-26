<?php

class Player
{
   private $symbole; 
   
   public function __constract($symbole)
   {
       $this->symbole = $symbole;
   }
   
   public function getSymbole()
   {
       return $this->symbole;
   }
}

?>