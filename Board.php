<?php

class Board {
    
    private $board = array(
        array(" "," "," "),
        array(" "," "," "),
        array(" "," "," ")
        );
    
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
        $output .= '<table class="tic">';
        $index = "";
        
        for($i = 0; $i < count($this->board); $i++) {
            
            $output .= '<tr>';
            
            for($j = 0; $j < count($this->board); $j++) {
                
                if(isset($this->board[$i][$j]) 
                    && $this->board[$i][$j] === "X") {
                        
                        $output .= '<td><span class="colorX">X</span></td>';
                    }
                 else {
                        
                    $index = "cell-".$i."-".$j;
                    $output .= '<td><input type="submit" class="reset field" name="'.$index.'" value="X" /></td>';
                    
                    }
            }
            $output .= '</tr>';
            
        }
        $output .= "</table>";
        
        return $output;
    }
}
?>    