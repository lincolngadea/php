<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Início: Diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Início: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas',
                        'subordinados'=>array(
                            //Início: Supervisor de Vendas
                            array(
                                'nome_cargo'=>'Supervisor de vendas'
                            )
                            //Final: Supervisor de Vendas
                        )
                    )
                    //Final: Gerente de Vendas
                )
            ),
            //Final: Diretor Comercial
            //Início: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Início: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a Pagar',
                        'subordinados'=>array(
                            //Início: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Final: Fupervisor de Pagamentos
                        )
                    ),
                    //Final: Gerente de Contas a Pagar
                    //Início: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Início: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Final: Supervisor de Suprimentos
                        )
                    )
                )
            )
            
        )

    )
);
//print_r($hierarquia);

function exibe($cargos){

    $html = "<ul>";
        foreach($cargos as $cargo){
            $html .= "<li>";
            $html .= $cargo['nome_cargo'];

            if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0 ){
                $html .= exibe($cargo['subordinados']);
            }
            $html .= "</li>";
        }
    $html .="</ul>";

    return $html;

}

echo exibe($hierarquia);