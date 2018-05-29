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
        $meses = ["Janeiro","Fevereiro","Março",
                  "Abril","Maio","Junho",
                  "Julho","Agosto","Setembro",
                  "Outubro","Novembro","Dezembro"];
        foreach ($meses as $key => $mes) {
            echo $key+1 . " --> " . $mes ."<br>";
        }
        ?>
        
        
        
        <form action="for.php" method="GET">
            <input type="text" name="nome">
            <input type="date" name="nascimento">
            <input type="submit" value="OK">
        </form>
        
        <?php
            foreach($_GET as $indice => $valor){
                echo "Nome do campo " . $indice;
                echo "<br> Valor do campo: " . $valor ."<br><br>";
            }
            
            $obj = new StdClass;
            $obj-> foo = 'bar';
            var_dump($obj);
            
            $pessoas = array();
            array_push($pessoas, ["nome"=>"Eduardo","sobrenome"=>"seabra"]);
            array_push($pessoas, ["nome"=>"Bruna","sobrenome"=>"Soares Seabra"]);
            echo "<br>";
            echo $pessoas[0]["nome"];
        ?>
    </body>
</html>
