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
        
        
                      function getIP() {
                          $IP = '';
                          if (getenv('HTTP_CLIENT_IP')) {
                            $IP =getenv('HTTP_CLIENT_IP');
                          } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
                            $IP =getenv('HTTP_X_FORWARDED_FOR');
                          } elseif (getenv('HTTP_X_FORWARDED')) {
                            $IP =getenv('HTTP_X_FORWARDED');
                          } elseif (getenv('HTTP_FORWARDED_FOR')) {
                            $IP =getenv('HTTP_FORWARDED_FOR');
                          } else{
                            $IP = getenv('HTTP_FORWARDED');
                          } 
                        return $IP;
                        }
                        
                //$a = $_GET['var'];
                $a=getIP();
                $b=$_SERVER["HTTP_X_FORWARDED_FOR"];
                
          

                //$nome = "Treinamento hcode<br>";
                
                
                print "variável A: $a";
                echo "<br>";
                print "variavel B: $b";
                echo "<br>";
                shell_exec("echo teste $a");
                //echo "<br>".strtoupper($nome)."<br>";
                echo var_dump($a)."<br>";
                echo var_dump($b)."<br>";
                //echo "<br>".ucwords($nome);
                
                //$nome = str_replace("hcode", "dudz", $nome);
                //echo "<br>".$nome;
                //$arrayString = ["parentes","mae",$nome];
              
        ?>
    </body>
</html>
