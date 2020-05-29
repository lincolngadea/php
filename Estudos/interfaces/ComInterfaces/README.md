# CONSIDERAÇÕES FINAIS

Como no exemplo em questão, indicamos a interface como parâmetro(linha 5, arquivo Orcamento.php), significa que podemos, em tempo de execução, passar qualquer objeto que implementar essa interface.

**Essa nova Relação entre Orcamento e OrcavelInterface caracteriza um acoplamento do tipo dinâmico, pois é definida em tempo de execução.**

>Se em algum momento passássemos um objeto de outra classe para o método adiciona(), teríamos uma mensagem de Fatal error...

