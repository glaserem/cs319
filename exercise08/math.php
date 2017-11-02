<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Exercise 8 | Answer</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Answer:</p>
        <?php 
            
            function math(){
                $x = $_REQUEST["firstNumber"];
                $y = $_REQUEST["secondNumber"];
                
                $add = $_REQUEST["add"];
                $subtract = $_REQUEST["subtract"];
                
                $answer = $_REQUEST["answer"];
                
                function math(){
                   return $answer= $x + $y;
                   return $answer= $x - $y;
                    
                    if ($x == $add){
                        echo "<p>" . ($x + $y) . "</p>"; 
                    } else ($x == $subtract){
                        echo "<p>" . ($x - $y) . "</p>";
                    }
                }
                
                
            }
        
        ?>
    </body>
</html>