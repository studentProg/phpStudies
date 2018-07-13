<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<hmtl>
    <body>
        <?php
            $login = "dudz";
            $senha = "seila Teste";
            $conn = new mysqli("localhost", "root", "", "dbphp7");
            if($conn->connect_errno){
                echo "Error: ".$conn->connect_errno;
                echo "<br>";
                echo "description: ".$conn->connect_error;
            }
            $stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login,des_senha) VALUES (?, ?)");
            $stmt->bind_param("ss", $login,$senha);            
            
            echo $stmt->execute()." --> saida statement <br>";
            
            $conn = new mysqli("localhost", "root", "", "dbphp7");
            $result = $conn->query("select * from tb_usuarios order by des_login");
            $data = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                echo $row["des_login"]."<br>";
                array_push($data, $row);
            }
          
            echo json_encode($data);
        ?>
    </body>
</hmtl>
