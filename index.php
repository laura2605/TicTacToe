<?php
session_start();

// $_SESSION["cell-0-0"];
// $_SESSION["cell-0-1"];
// $_SESSION["cell-0-2"];

// $_SESSION["cell-1-0"];
// $_SESSION["cell-1-1"];
// $_SESSION["cell-1-2"];

// $_SESSION["cell-2-0"];
// $_SESSION["cell-2-1"];
// $_SESSION["cell-2-2"];
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
                    <table class="tic">
              
                        	 <?php 
//                         	 $output = "";
                        	 
//                         	 if(array_key_exists("cell-0-0", $_SESSION) && $_SESSION["cell-0-0"] === "X") {
                        	  
//                         	   $output .= '<tr><td><span class="colorX">X</span></td>';   
                        	 
//                         	 }
//                         	 elseif(array_key_exists("cell-0-0", $_GET) && $_GET["cell-0-0"] === "X") {  
                              
//                         	     $output .= '<tr><td><span class="colorX">X</span></td>';  
                            
//                             } 
//                             else { 
//                                 $output .= '<tr><td><input type="submit" class="reset field" name="cell-0-0" value="X" /></td>';
                                
//                                 if(array_key_exists("cell-0-0", $_GET)) {
//                                     $_SESSION["cell-0-0"] = $_GET["cell-0-0"];
//                                 }
//                             }
                            
//                             if(array_key_exists ("cell-0-1", $_GET) && $_GET["cell-0-1"] === "X") {  
                              
//                                  $output .= '<td><span class="colorX">X</span></td>';
                            
//                             } else { 
//                                 $output .= '<td><input type="submit" class="reset field" name="cell-0-1" value="X" /></td>';
                                
//                             }
                            
//                             if(array_key_exists ("cell-0-2", $_GET) && $_GET["cell-0-2"] === "X") {  
                              
//                                 $output .= '<td><span class="colorX">X</span></td><tr/>';
//                             } 
//                             else { 
//                                 $output .= '<td><input type="submit" class="reset field" name="cell-0-2" value="X" /></td><tr/>';
//                             }
                            
                            
                       
//                             if(array_key_exists ("cell-1-0", $_GET) && $_GET["cell-1-0"] === "X") {
                                
//                                 $output .= '<tr><td><span class="colorX">X</span></td>';
//                             }
//                             else {
//                                 $output .= '<tr><td><input type="submit" class="reset field" name="cell-1-0" value="X" /></td>';
//                             }
                            
//                             if(array_key_exists ("cell-1-1", $_GET) && $_GET["cell-1-1"] === "X") {
                                
//                                 $output .= '<td><span class="colorX">X</span></td>';
//                             }
//                             else {
//                                 $output .= '<td><input type="submit" class="reset field" name="cell-1-1" value="X" /></td>';
//                             }
                            
//                             if(array_key_exists ("cell-1-2", $_GET) && $_GET["cell-1-2"] === "X") {
                                
//                                 $output .= '<td><span class="colorX">X</span></td><tr/>';
//                             }
//                             else {
//                                 $output .= '<td><input type="submit" class="reset field" name="cell-1-2" value="X" /></td><tr/>';
//                             }
                            
                            
                            
//                             if(array_key_exists ("cell-2-0", $_GET) && $_GET["cell-2-0"] === "X") {
                                
//                                 $output .= '<tr><td><span class="colorX">X</span></td>';
//                             }
//                             else {
//                                 $output .= '<tr><td><input type="submit" class="reset field" name="cell-2-0" value="X" /></td>';
//                             }
                            
//                             if(array_key_exists ("cell-2-1", $_GET) && $_GET["cell-2-1"] === "X") {
                                
//                                 $output .= '<td><span class="colorX">X</span></td>';
//                             }
//                             else {
//                                 $output .= '<td><input type="submit" class="reset field" name="cell-2-1" value="X" /></td>';
//                             }
                            
//                             if(array_key_exists ("cell-2-2", $_GET) && $_GET["cell-2-2"] === "X") {
                                
//                                 $output .= '<td><span class="colorX">X</span></td><tr/>';
//                             }
//                             else {
//                                 $output .= '<td><input type="submit" class="reset field" name="cell-2-2" value="X" /></td><tr/>';
//                             }
                            
//                             echo $output;
                            
//                             if(array_key_exists ("cell-0-1", $_GET))
//                             {
//                                 $_SESSION["cell-0-1"] = $_GET["cell-0-1"];
//                             }
                            

                            $output = "";
                            
                            for($i = 0; $i < 3; $i++) {
                                
                                $output .= '<tr>';
                                
                                for($j = 0; $j < 3; $j++) {
                                    
                                    $index = $i."-".$j;
                                    
                                    if(array_key_exists($index, $_GET) && $_GET[$index] === "X" || array_key_exists($index, $_SESSION) && $_SESSION[$index] === "X") {
                                        
                                        $output .= '<td><span class="colorX">X</span></td>';
                                    }
                                    else {
                                        
                                        $output .= '<td><input type="submit" class="reset field" name="'.$index.'" value="X" /></td>';
                                        
//                                         $_SESSION[$index] = $_GET[$index];
                                        
                                    }
                                }
                                $output .= '</tr>';
                            }
                            
                            echo $output;
                            ?>
                            
                    </table>
                </form>
            </article>
        </section>
    </body>
</html>


<?php


    

//require_once('TicTacToe.php');

//print_r($_POST["cell-0-0"]);

?>