<?php

class TicTacToe
{
    private $board = array();
    
    /**
     * 
     */
    public function play()
    {
        $board = array(
            array(" "," "," "),
            array(" "," "," "),
            array(" "," "," ")
        );
        
        while ($this->win() === 0)
        {
            
        }
    }
    
    /**
     * @param int $row
     * @param int $column
     */
    public function drawSymbole($row, $column, $symbole)
    {
        $board[$column][$row] = $symbole;
                
        echo $board[0][0].$board[0][1].$board[0][2];
        echo "<br/>";
        echo $board[1][0].$board[1][1].$board[1][2];
        echo "<br/>";
        echo $board[2][0].$board[2][1].$board[2][2];
    }
    
    /**
     * 
     */
    private function win()
    {   
        if($board[0][0] === "X" && $board[0][1] === "X" && $board[0][2] === "X" ||
           $board[1][0] === "X" && $board[1][1] === "X" && $board[1][2] === "X" ||
           $board[2][0] === "X" && $board[2][1] === "X" && $board[2][2] === "X" ||
           $board[0][0] === "X" && $board[1][0] === "X" && $board[2][0] === "X" ||
           $board[0][1] === "X" && $board[1][1] === "X" && $board[2][1] === "X" ||
           $board[0][2] === "X" && $board[1][2] === "X" && $board[2][2] === "X" ||
           $board[0][0] === "X" && $board[1][1] === "X" && $board[2][2] === "X" ||
           $board[2][0] === "X" && $board[1][1] === "X" && $board[2][0] === "X")
        {
            return 1;
        }
        elseif($board[0][0] === "O" && $board[0][1] === "O" && $board[0][2] === "O" ||
               $board[1][0] === "O" && $board[1][1] === "O" && $board[1][2] === "O" ||
               $board[2][0] === "O" && $board[2][1] === "O" && $board[2][2] === "O" ||
               $board[0][0] === "O" && $board[1][0] === "O" && $board[2][0] === "O" ||
               $board[0][1] === "O" && $board[1][1] === "O" && $board[2][1] === "O" ||
               $board[0][2] === "O" && $board[1][2] === "O" && $board[2][2] === "O" ||
               $board[0][0] === "O" && $board[1][1] === "O" && $board[2][2] === "O" ||
               $board[2][0] === "O" && $board[1][1] === "O" && $board[2][0] === "O")
        {
            return 2;
        }
        else 
        {
            return 0;
        }
    }
}

?>