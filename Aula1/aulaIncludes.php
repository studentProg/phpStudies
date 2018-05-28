<!DOCTYPE html>
<!--
Existem dois tipos de includes no php o require e o próprio include.
Nesta primeira linha de código php é utulizado o método include.

O include pode incluir de dominios remotos, caso o arquivo não exista ou possua
erros a execução do código não é terminado.

Require o arquivo deve existir e o mesmo deve funcionar perfeitamente caso contrario 
toda a execução do código é terminada;

include_once
require_once

O PHP 7 não terminar mais a execução do código em erros de arquivos em require.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //include "aulaIncludes2.php";
            //$resultado = somar(10,25);
            //echo $resultado;
            
            require "aulaIncludes2.php";
            $resultado = somar(10,25);
            echo $resultado;
        ?>
    </body>
</html>
