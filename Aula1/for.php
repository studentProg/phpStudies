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
        <form action="for.php" method="GET">
            <input type="text" name="nome"   style="height: 20px;" >
            <input type="date" name="nascimento" style="height: 20px;">
            <input type="submit" value="OK"  style="height: 34px;">
        </form>
        
        <?php
            //foreach($_GET as $indice => $valor){
            //    echo "Nome do campo " . $indice;
            //    echo "<br> Valor do campo: " . $valor ."<br><br>";
            //}
            
            $obj = new StdClass;
            $obj-> foo = 'bar';
            var_dump($obj);
            echo '<br><br>Acessando a propriedade foo do objeto $obj=>foo <br>';
            echo $obj->foo;
            echo '<br>';
            
            $pessoas = array();
            array_push($pessoas, ["nome"=>"Eduardo","sobrenome"=>"seabra"]);
            array_push($pessoas, ["nome"=>"Bruna","sobrenome"=>"Soares Seabra"]);
            echo "<br>";
            //convertendo para JSON
            echo json_encode($pessoas);
            //convertendo um JSON em ARRAY
            $json = '[{"nome":"Eduardo","sobrenome":"seabra"},{"nome":"Bruna","sobrenome":"Soares Seabra"}]';
            $arrayJson = json_decode($json,true);
            var_dump($arrayJson);
        ?>
    </body>
</html>
