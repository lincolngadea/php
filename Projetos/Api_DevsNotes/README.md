## PROJETO DESENVOLVIDO EM AULA ##

Consiste na ciração de uma pequena API para um sistema de anotações

# O que o Projeto Precisa Fazer? #

> Listar as anotações
> Pegar informações de uma anotação
> Inserir uma anotação nova
> Atualizar uma anotação
> Deletar uma anotação

# Qual a estrutura de dados? #

> local para armazenas as anotações
>> id
>> title
>> body

# Quais os endpoints? #

**(METODO) /url (PARÂMETROS)**

> (GET) /api/notes
> (GET) /api/note/123
> (POST) /api/note (title, body)
> (PUT) /api/note/123 (title, body)
> (DELETE) /api/note/123