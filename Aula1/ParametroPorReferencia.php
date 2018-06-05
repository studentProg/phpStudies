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
            $variavel = 20;
            function somaSemReferencia ($parametroSR){
                return $parametroSR+=20;
            }
            function somaPorReferencia (&$parametroSR){
                return $parametroSR+=30;
            }
             echo  "<br>Chamada de função sem Referencia: ".somaSemReferencia($variavel);
             echo  "<br>Chamada de função por Referencia: ".somaPorReferencia($variavel);
             echo "<br>Valor final de variavel: ".$variavel;
            //--------------------------------------------------------------
             /*         Referencia em foreach       */
             $pessoa = ["nome"=>"JoseFulano","idade"=>30];
             foreach($pessoa as &$value){
                 if(gettype($value) === 'integer'){
                     echo "<br>Opa! -5 anos na idade ".$value;
                     $value += 5;
                 }
             }
             echo "<br>".$pessoa["nome"]." tem: ".$pessoa["idade"]." anos<br>";
             print_r($pessoa);
             
             
             
             ?>        
    </body>
</html>
