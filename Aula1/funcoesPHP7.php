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
            //Funções PHP 7
            function soma(int ...$valores):string{ //   <--- Tipo de retorno String e recebendo array de parâmetros.
                return array_sum($valores);
            }
             echo soma(2,2,3,4)."<br>";
             echo var_dump(soma(2,2,3,4));
             echo "<br>".soma(22,34)."<br>";
             echo var_dump(soma(22,34));
             echo "<br>".soma(2,2,"edu@gmail.com",4.2);
             echo "<br>".soma(2.2,4.2);
             ?>        
    </body>
</html>
