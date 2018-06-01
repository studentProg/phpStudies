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
                       
            $pessoas = array();
            array_push($pessoas, ["nome"=>"Eduardo","sobrenome"=>"seabra"]);
            array_push($pessoas, ["nome"=>"Bruna","sobrenome"=>"Soares Seabra"]);
            //convertendo Array para JSON
            echo json_encode($pessoas);
            echo "<br>";
            echo "<br>";
            //convertendo um JSON em ARRAY
            $json = '[{"nome":"Eduardo","sobrenome":"seabra"},{"nome":"Bruna","sobrenome":"Soares Seabra"}]';
            $arrayJson = json_decode($json,true);
            var_dump($arrayJson);
            echo "<br>";
            echo "<br>";
            echo $arrayJson[0]["nome"] . " " . $arrayJson[0]['sobrenome'];
        ?>
    </body>
</html>
