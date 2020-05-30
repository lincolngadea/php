## ATRIBUTOS ESTÁTICOS ##

> Pertencem a apenas uma única Classe não a um objeto específico;
> São dinâmicos como os atributos de um Objeto mas estão relacionados à classe;
> São compartilhados entre todos os objetos de uma mesma classe;

Para acessarmos atributos estáticos usamos a forma:

```php
    self::$atributo //Quando acessado de dentro da Classe

    Classe::$atributo //Quando acessado de fora da classe
```
**Além disso é importante declarar o modificador static na frente de seu nome**

>Confira o exemplo no arquivo "propriedade_estatica.php"

Perceba no exemplo que, para manipular atributos estáticos, podemos usar métodos estáticos.

