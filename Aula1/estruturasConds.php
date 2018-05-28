<!DOCTYPE html>
<!--
if
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $qualSuaIdade = 30;
        
            $idadeCrianca = 12;
            $idadeAdulto = 18;
            $idadeIdoso = 65;
            
            if($qualSuaIdade<$idadeCrianca){
                echo "Criança";
            } else if ($qualSuaIdade < $idadeAdulto) {
                echo "adolescente";
            }
            elseif ($qualSuaIdade>idadeAdulto && $qualSuaIdade<$idadeIdoso){
                echo "Adulto";
            }
            else{
                echo "Idoso";
            }
            
            //Operador Ternário
            echo "<br>";
            echo "<br>".($qualSuaIdade < $idadeIdoso)?"maior Idade":"menorIdade";
            
            
        ?>
    </body>
</html>
