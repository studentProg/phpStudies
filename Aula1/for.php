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
            for ($i=0;$i<=50;$i+=5){
                
                if ($i>9 && $i<35){
                    continue;
                }else if ($i == 45)break;
                echo $i . "<br>";
                
            }
        
        ?>
    </body>
</html>
