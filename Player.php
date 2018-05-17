<?php

class Player {
    
   private $symbol;
   private $name;
   
   public function __construct($name, $symbol) {
       
       $this->symbol = $symbol;
       $this->name = $name;
   }
   
   public function getName() {
       
       return $this->name;
   }
   
   public function getSymbol()
   {
       return $this->symbol;
   }
}

?>