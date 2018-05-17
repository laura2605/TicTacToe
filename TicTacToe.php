<?php

class TicTacToe {
   
    /**
     * 
     */
    public function hasWon($currentPlayer, $board) {
        
        $output = "";
        
        $hasWin = false;
            
        $fieldsInRow = 0;
        $fieldsInColumn = 0;
            
        for($i = 0; $i < count($board->getBoard()); $i++) {
                
            for($j = 0; $j < count($board->getBoard()[$i]); $j++) {
                    
                if($board->getValue($i, $j) === "X") {
                        
                    $fieldsInRow++;
                }
            }
                
            if($fieldsInRow === count($board->getBoard())) {
                    
                $output = '<p>Player '.$currentPlayer->getName().' has won!</p>';
            }
        }
            
        for($i = 0; $i < count($board->getBoard()); $i++) {
                
            for($j = 0; $j < count($board->getBoard()[$i]); $j++) {
                    
                if($board->getValue($j, $i) === $currentPlayer->getSymbol()) {
                        
                    $fieldsInColumn++;
                }
            }
                
            if($fieldsInRow === count($board->getBoard()[$i])) {
                    
                $output = '<p>Player '.$currentPlayer->getName().' has won!</p>';;
            }
        }
    
            return $output;   
    }
       
}

?>