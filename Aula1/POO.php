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
                class Person{
                    private $name;
                    private $age;
                    private $sex;
                    
                    public function __construct($name,$age,$sex){
                        $this->name=$name;
                        $this->age=$age;
                        $this->sex=$sex;
                    }
                    
                    public function __destruct (){
                        echo "<br><br>hey fui chamado - automaticamente - para destruir o objeto.";
                        
                    }
                    public function setName ($name){
                        $this->name=$name;
                    }
                    
                    public function setSex ($sex){
                        $this->sex=$sex;
                    }
                    
                    public function setAge ($age){
                        $this->age=$age;
                    }
                    public function getName (){
                        return $this->name;
                    }
                    
                    public function getSex (){
                        return $this->sex;
                    }
                    
                    public function getAge(){
                        return $this->age;
                        
                    }
                    
                }
            $person1 = new Person("hey this is a student",20,"female");
            $person1->setSex("male");
            echo $person1->getName()."<br>";
            echo $person1->getSex()."<br>";
            echo $person1->getAge()."<br>";
            echo "<br>".$person1->getName(),"<br>",$person1->getSex(),"<br>",$person1->getAge();
        ?>        
    </body>
</html>
