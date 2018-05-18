<?php

class TicTacToe {
    
    private $board;
    private $playerA;
    private $playerB;
    
    public function __construct($board, $playerA, $playerB) {
        
        $this->board = $board;
        $this->playerA = $playerA;
        $this->playerB = $playerB;
    }
   
    /**
     * 
     */
    public function hasWon() {
        
        $output = "";
        
        $hasWin = false;
            
        $fieldsInRowPlayerA = 0;
        $fieldsInColumnPlayerA = 0;
        
        $fieldsInRowPlayerB = 0;
        $fieldsInColumnPlayerB = 0;
            
        for($i = 0; $i < count($this->board->getBoard()); $i++) {
                
            for($j = 0; $j < count($this->board->getBoard()[$i]); $j++) {
                    
                if($this->board->getValue($i, $j) === $this->playerA->getSymbol()) {
                        
                    $fieldsInRowPlayerA ++;
                }
                
                elseif($this->board->getValue($i, $j) === $this->playerB->getSymbol()) {
                    
                    $fieldsInRowPlayerB ++;
                }
            }
                
            if($fieldsInRowPlayerA === count($this->board->getBoard())) {
                    
                $output = '<p>Player '.$this->playerA->getName().' has won!</p>';
            }
            
            elseif($fieldsInRowPlayerA === count($this->board->getBoard())) {
                
                $output = '<p>Player '.$this->playerB->getName().' has won!</p>';
            }
        }
            
        for($i = 0; $i < count($this->board->getBoard()); $i++) {
                
            for($j = 0; $j < count($this->board->getBoard()[$i]); $j++) {
                    
                if($this->board->getValue($j, $i) === $this->playerA->getSymbol()) {
                        
                    $fieldsInColumnPlayerA ++;
                }
                
                elseif($this->board->getValue($j, $i) === $this->playerB->getSymbol()) {
                    
                    $fieldsInColumnPlayerB ++;
                }
            }
                
            if($fieldsInRowPlayerA === count($this->board->getBoard()[$i])) {
                    
                $output = '<p>Player '.$this->playerA->getName().' has won!</p>';
            }
            
            elseif($fieldsInRowPlayerB === count($this->board->getBoard()[$i])) {
                
                $output = '<p>Player '.$this->playerB->getName().' has won!</p>';
            }
        }
    
            return $output;   
    }
       
}

?>