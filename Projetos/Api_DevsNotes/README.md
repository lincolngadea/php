## PROJETO DESENVOLVIDO EM AULA ##

Consiste na ciração de uma pequena API para um sistema de anotações

# O que o Projeto Precisa Fazer? #

> Listar as anotações
> Pegar informações de uma anotação
> Inserir uma anotação nova
> Atualizar uma anotação
> Deletar uma anotação

# Qual a estrutura de dados? #

> local para armazenar as anotações
>> id
>> title
>> body

# Quais os endpoints? #

**(METODO) /url (PARÂMETROS)**

> (GET) /api/notes - /api/getall.php
> (GET) /api/note/123 - /api/get.php (id)
> (POST) /api/note - /api/insert.php (title, body)
> (PUT) /api/note/123 - /api/update.php (title, body)
> (DELETE) /api/note/123 - /api/delete.php (id)

Site usado para testar a API
>https://resttesttest.com/