<?php

class TicTacToe {
    
    /**
     * @var Board $board
     */
    private $board;
    
    /**
     * @var Player $playerA
     */
    private $playerA;
    
    /**
     * @var Player $playerB
     */
    private $playerB;
    
    /**
     * @param Board $board
     * @param Player $playerA
     * @param Player $playerB
     */
    public function __construct($board, $playerA, $playerB) {
        
        $this->board = $board;
        $this->playerA = $playerA;
        $this->playerB = $playerB;
    }
   
    /**
     * returns a HTML paragraph if a player has won the game, the paragraph tells which player has won
     * 
     * @return string $output
     */
    public function hasWon() {
        
        $output = "";
            
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
            
            elseif($fieldsInRowPlayerB === count($this->board->getBoard())) {
                
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