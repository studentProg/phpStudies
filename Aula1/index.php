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
                $nome = "Treinamento hcode";
                $a = $_GET['var'];
                echo $a;
                echo "<br>"."$a"."<br>";
                echo strtoupper($nome)."<br>";
                var_dump($a)."<br>";
                echo "<br>".ucwords($nome);
                
                $nome = str_replace("hcode", "dudz", $nome);
                echo "<br>".$nome;
                $arrayString = ["parentes","mae",$nome];
              
        ?>
    </body>
</html>
