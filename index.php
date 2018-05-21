<?php
session_start();

define ('BASEPATH', realpath(dirname(__FILE__)));
require_once (BASEPATH.DIRECTORY_SEPARATOR.'autoload.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Tic-Tac-Toe</title>
        <meta name="description" content="Tic-Tac-Toe-Game. Here is a short description for the page. This text is displayed e. g. in search engine result listings.">
        <style>
            table.tic td {
                border: 1px solid #333; /* grey cell borders */
                width: 8rem;
                height: 8rem;
                vertical-align: middle;
                text-align: center;
                font-size: 4rem;
                font-family: Arial;
            }
           
            input.field {
                border: 0;
                background-color: white;
                color: white; /* make the value invisible (white) */
                height: 8rem;
                width: 8rem !important;
                font-family: Arial;
                font-size: 4rem;
                font-weight: normal;
                cursor: pointer;
                
            }
            input.field:hover {
                border: 0;
                color: #c81657; /* red on hover */
            }
            .colorX { color: #e77; } /* X is light red */
            .colorO { color: #77e; } /* O is light blue */
            table.tic { border-collapse: collapse; }
            
        </style>
    </head>
    <body>
        <section>
            <h1>Tic-Tac-Toe</h1>
            <article id="mainContent">
                <h2>Your free browsergame!</h2>
                <p>Type your game instructions here...</p>
                    
                    <?php                        	

                    $output = "";                            
                    
                    $playerA = new Player("A", "X");
                    $playerB = new Player("B", "O");
                    
                    $currentPlayer = $playerA;
                    
                    if(isset($_SESSION["player"])) {
                        
                        $lastPlayer = unserialize($_SESSION["player"]);
                        
                        if($lastPlayer->getName() === $playerA->getName()) {
                            
                            $currentPlayer = $playerB;
                        }
                        else {
                            
                            $currentPlayer = $playerA;
                        }
                    }
                    print_r($currentPlayer);
                    echo "<br/>";
                    print_r($playerA);
                    echo "<br/>";
                   
                    $board = new Board($currentPlayer, $playerA, $playerB);
                    
                    $ticTacToe = new TicTacToe($board, $playerA, $playerB);
                    
                    if(isset($_SESSION["board"])) {
                                
                        $board = unserialize($_SESSION["board"]);
                        $board->setCurrentPlayer($currentPlayer);
                    }
                    
                    for($i = 0; $i < count($board->getBoard()); $i++) {                                                              
                                
                        for($j = 0; $j < count($board->getBoard()); $j++) {
                             
                            $index = "cell-".$i."-".$j;
                                    
                            if(isset($_GET[$index])) {
                                       
                                $board->setValue($i, $j, $currentPlayer->getSymbol());
                                        
                            }
                        }
                               
                    }
                    print_r($board);
                    $output .= $board->boardInHTML();
                    $output .= $ticTacToe->hasWon();
                    
                    $_SESSION["board"] = serialize($board);
                    $_SESSION["player"] = serialize($currentPlayer);
                    
                    
                    
                    echo $output;
                    ?>
                            
                
            </article>
        </section>
    </body>
</html>
