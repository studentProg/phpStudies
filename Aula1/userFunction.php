<!DOCTYPE html>
<!--
if
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h1>
        User Function!
    </h1>
    <br>
    <body>
        <?php
            function ola ($param1){
                if(!isset($param1)){
                    echo "Você não passou nenhum parametro";
                }else{ 
                    echo "<br>Esta função não pode ser chamada sem parâmetro <br> Segue o parametro inserido: " .$param1 . "<br>";
                }
            }
          
            //ola(); <-- se estalinha for descomentada ela quebra a execução do código pois essa função tem um parâmetro obrigatório 
            ola("Dudz");
            ola("Olá mundo");
            // diferença com o return e valor padão
            function olaMundo ($param1="valor padrao"){
                if(!isset($param1)){
                    return "Você não passou nenhum parametro";
                }else{ 
                    return "<br>Esta função não pode ser chamada sem parâmetro <br> Segue o parametro inserido: " .$param1 . "<br>";
                }
            }
          
            echo olaMundo();
            echo olaMundo("Dudz");
            echo olaMundo("Olá mundo");
            
            //Para realizar a sobrecarga a função nao deve pré-definir nenhum
            //parametro conforme função abaixo
            function sobrecarga (){
                $argsParam = func_get_args();
                echo var_dump($argsParam);
                
                foreach ($argsParam as $key => $value){
                    echo ( "<br><br>Parêmetro ".$key." <br>Valor: ".print_r($value)."<br><br>");
                }
                
            }
            echo "<br>";
            sobrecarga("chamada com 1 parametro");
            sobrecarga("chamada com 2 parametros",10);
            sobrecarga("chamada com 3 parametros",25,["hey","this","is", "an","array"]);
            
        ?>
    </body>
</html>
