<?php
session_start();

require_once('Board.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Tic-Tac-Toe. This is the title. It is displayed in the titlebar of the window in most browsers.</title>
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
                <form method="get" action="index.php">
                    
                    <?php                        	

                    $output = "";                            

                    $board = new Board();
                            
                    if(isset($_SESSION["board"]) && !empty($_SESSION["board"])) {
                                
                        $board = unserialize($_SESSION["board"]);
                    }

                            
                    for($i = 0; $i < 3; $i++) {                                                              
                                
                        for($j = 0; $j < 3; $j++) {
                             
                            $index = "cell-".$i."-".$j;
                                    
                            if(isset($_GET[$index]) && $_GET[$index] === "X") {
                                       
                                $board->setValue($i, $j, "X");
                                        
                            }
                        }
                               
                    }
                            
                    $output .= $board->boardInHTML();
                            
                    $_SESSION["board"] = serialize($board);
                            
                    echo $output;
                    ?>
                            
                </form>
            </article>
        </section>
    </body>
</html>
