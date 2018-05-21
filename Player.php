<?php

class Player {
    
   /**
    * @var string $symbol
    */
   private $symbol;
   
   /**
    * @var string $name
    */
   private $name;
   
   /**
    * @param string $name
    * @param string $symbol
    */
   public function __construct($name, $symbol) {
       
       $this->symbol = $symbol;
       $this->name = $name;
   }
   
   /**
    * returns the name of the player
    * 
    * @return string 
    */
   public function getName() {
       
       return $this->name;
   }
   
   /**
    * returns the symbol of the player
    * 
    * @return string
    */
   public function getSymbol()
   {
       return $this->symbol;
   }
}

?>