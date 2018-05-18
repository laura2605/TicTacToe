<?php

class Board {
    
    private $board = array(
        array(" "," "," "),
        array(" "," "," "),
        array(" "," "," ")
        );
    
    private $currentPlayer;
    
    public function __construct($currentPlayer) {
        
        $this->currentPlayer = $currentPlayer;
    }
    
    public function getBoard() {
    
        return $this->board;
    }
    
    public function setValue($key1, $key2, $value) {
        
        if($key1 >= 0 && $key1 < count($this->board)
            && $key1 >= 0 && $key1 < count($this->board)
            && $value === "X" || $value === "O") {
            
                $this->board[$key1][$key2] = $value;
        }
    }
    
    public function getValue($key1, $key2) {
        
        if($key1 >= 0 && $key1 < count($this->board)
            && $key1 >= 0 && $key1 < count($this->board)) {
             
                return $this->board[$key1][$key2];
        }
    }
    
    public function boardInHTML() {
        
        $output = "";
        $output .= '<form method="get" action="index.php">';
        $output .= '<table class="tic">';
        
        $index = "";
        
        for($i = 0; $i < count($this->board); $i++) {
            
            $output .= '<tr>';
            
            for($j = 0; $j < count($this->board[$i]); $j++) {
                
                if(isset($this->board[$i][$j]) 
                    && $this->board[$i][$j] === $this->currentPlayer->getSymbol()) {
                        
                        $output .= '<td><span class="colorX">'.$this->currentPlayer->getSymbol().'</span></td>';
                    }
                 else {
                        
                    $index = "cell-".$i."-".$j;
                    $output .= '<td><input type="submit" class="reset field" name="'.$index.'" value="'.$this->currentPlayer->getSymbol().'" /></td>';
                    
                    }
            }
            $output .= '</tr>';
            
        }
        $output .= '</table>';
        $output .= '</form>';
        
        return $output;
    }
}
?>    