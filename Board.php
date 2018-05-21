<?php

class Board {
    
    /**
     * @var array $board
     */
    private $board = array(
        array(" "," "," "),
        array(" "," "," "),
        array(" "," "," ")
        );
    
    /**
     * @var Player $currentPlayer
     */
    private $currentPlayer;
    
    /**
     * @var Player $playerA
     */
    private $playerA;
    
    /**
     * @var Player $playerB
     */
    private $playerB;
    
    /**
     * @param Player $currentPlayer
     * @param Player $playerA
     * @param Player $playerB
     */
    public function __construct($currentPlayer, $playerA, $playerB) {
        
        $this->currentPlayer = $currentPlayer;
        $this->playerA = $playerA;
        $this->playerB = $playerB;
    }
    
    /**
     * sets the current player
     * 
     * @param Player $currentPlayer
     */
    public function setCurrentPlayer($currentPlayer) {
        
        $this->currentPlayer = $currentPlayer;
    }
    
    /**
     * returns the board array
     * 
     * @return array
     */
    public function getBoard() {
    
        return $this->board;
    }
    
    /**
     * sets the symbol of the current player in the addressed field of the board array
     * 
     * @param int $key1
     * @param int $key2
     * @param string $value
     */
    public function setValue($key1, $key2, $value) {
        
        if($key1 >= 0 && $key1 < count($this->board)
            && $key2 >= 0 && $key2 < count($this->board)
            && $value === $this->currentPlayer->getSymbol()) {
            
                $this->board[$key1][$key2] = $value;
        }
    }
    
    /**
     * returns the value of the addressed field of the board array
     * 
     * @param int $key1
     * @param int $key2
     * @return string
     */
    public function getValue($key1, $key2) {
        
        if($key1 >= 0 && $key1 < count($this->board)
            && $key2 >= 0 && $key2 < count($this->board)) {
             
                return $this->board[$key1][$key2];
        }
    }
    
    /**
     * returns the board in a HTML-version
     * 
     * @return string $output
     */
    public function boardInHTML() {
        
        $output = "";
        $output .= '<form method="get" action="index.php">';
        $output .= '<table class="tic">';
        
        $index = "";
        
        for($i = 0; $i < count($this->board); $i++) {
            
            $output .= '<tr>';
            
            for($j = 0; $j < count($this->board[$i]); $j++) {
                
                if(isset($this->board[$i][$j]) 
                    && $this->board[$i][$j] === $this->playerA->getSymbol()
                    || $this->board[$i][$j] === $this->playerB->getSymbol()) {
                        
                        $output .= '<td><span class="colorX">'.$this->getValue($i, $j).'</span></td>';
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