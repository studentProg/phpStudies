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
        
        $hierarquia = 
            array(
                array(
                    'nome_cargo'=>'CEO',
                    'subordinados'=>array(
                        //inicio Diretor Comercial
                        array(
                            'nome_cargo'=>'Diretor Comercial',
                            'subordinados'=>
                                array('nome_cargo'=>'Gerente de Vendas')
                            )
                        
                       ,
                        //Termino Diretor Comercial
                        //inicio Diretor Financeiro
                        array(
                            "nome_cargo"=>"Diretor Financeiro",
                            "subordinados"=>
                                //Inicio Gerente de contas
                                array(
                                    "nome_cargo"=>"Gerente de contas a Pagar",
                                    "subordinados"=>array("nome_cargo"=>"Supervisor de pagamentos")
                                    ),
                                ////termino Gerente de contas a Pagar
                                //Inicio Gerente de compras
                                array(
                                        "nome_cargo"=>"Gerente de Compras",
                                        "subordinados"=>array("nome_cargo"=>"Supervisor de Suprimentos")
                                    )
                        )
                        //termino diretor financeiro
                        
                    )
                )
            );
        
        function exibe ($cargos){
            
            $html ='<ul>';
            foreach ($cargos as $cargo){
                $html .='<li>';
                    
                $html .= $cargo['nome_cargo'];
                if(isset($cargo['subordinados'])  ){
                    $html.=exibe($cargo['subordinados']);
                    
                }
                
                $html .='</li>';
            }
            
            
            $html .='</ul>';
            return $html;
        }
        
        echo exibe($hierarquia);
        echo var_dump($hierarquia);
        ?>        
    </body>
</html>
