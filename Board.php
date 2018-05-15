<?php

class Board {
    
    private $board = array(
        array(" "," "," "),
        array(" "," "," "),
        array(" "," "," ")
        );
    
    public function setValue($key1, $key2, $value) {
        
        $this->board[$key1][$key2] = $value;
    }
    
    public function getValue($key1, $key2) {
        
        return $this->board[$key1][$key2];
    }
    
    public function boardInHTML() {
        
        $output = "";
        
        for($i = 0; $i < 3; $i++) {
            
            $output .= '<tr>';
            
            for($j = 0; $j < 3; $j++) {
                
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
        
        return $output;
    }
}
?>    