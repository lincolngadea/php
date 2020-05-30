## PADRÃO SINGLETON ##

Permite que um Objeto fique disponível para toda a aplicação, porém sem perder o encapsulamento.

> É permitido criar um, e apenas um, objeto de determinada classe e compartilhar esse objeto com diferentes lugares(métodos) da mesma aplicação, como um recurso global.

**COMO FAZER PARA SÓ EXISTA UMA ÚNICA INSTÂNCIA DESSE OBJETO DISPONÍVEL NA APLICAÇÃO, SEU MÉTODO CONSTRUTOR É MARCADO COMO PRIVATE**

Como não podemos criar novos objetos dessa classe por meio do Operador new, precisaremos criar outra forma para instanciar um, e apenas um, objeto. Faremos isso por meio de um método estático chamado getInstance() que será responsável por criar uma instância da primeira vez que for chamado e somente retornar a mesmas instância em todas as outras vezes que for chamado.

**Confira um exemplo de implementação de um Padrão Singleton nos arquivos dessa pasta**