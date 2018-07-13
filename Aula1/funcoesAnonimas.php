<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function test ($callback){
                
                //processo lento
                
                $callback();
            }
            test(function(){
                echo "just ended<br><br>";
            });
            //----------------Outra forma
            $fn = function ($argumento){
                var_dump($argumento);
                if (gettype($argumento) === 'string'){
                    echo "<br> this is a string";
                }
            };
            $fn("hello, I'm calling a function from a var");
            
        ?>        
    </body>
</html>
