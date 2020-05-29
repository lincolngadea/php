# CONSIDERAÇÕES 

> Perceba que o método calculaTotal() utiliza o getPreco() da classe Produto;
> Existe a certeza de que a classe Orcamento sabe exatamente o que tem na classe Produto;

**Isso Caracteriza um forte acoplamento do tipo estático**

> Outra cituação, é que a classe Ocamento só funciona com a classe Produto

## PERGUNTA: E se no futuro eu precisar fazer um orçamento de outras coisas que não sejam necessariamente produto? Serviços por exemplo?

**Para isso acontecer precisamos deixar a classe Orcamento mais flexível**

Precisamos fazer com que a classe Orcamento possa oferecer outros itens Orçáveis fazendo parte do Orçamento.

Para isso, ao invés de forçar para a classe Orcamento aceitar apenas objetos da Classe Produto, criamos uma interface de Comunicação que permitirá que a classe Orcamento receba objetos de outras classes também.

**Desde que esses Objetos concordem com essas interfaces**

## CONFIRA ESSA IMPLEMENTAÇÃO NA PASTA ComInterfaces
