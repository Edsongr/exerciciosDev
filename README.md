## Instruções para rodar o projeto

O Projeto foi desenvolvido em Laravel, versão 8.
Foi utilizado o PHP versão 8.1 e o Mysql.

Primeiramente crie um DB e configure no arquivo .env essa informação de conexão. 

Após essa configuração rode os comandos abaixo:

Instalando as dependencias:
<code>
    composer install
</code>

Criando as tabelas e alimentando com os primeiros dados:
<code>
    php artisan migrate
    php artisan db:seed
</code>

Subindo o servidor local:
<code>
    php artisan serve
</code>


### Instruções Telas

Na tela Home terá a opção de clicar em qual exercício deseja avaliar. 

<img src="#" alt="Home">




### Created By 
Edson Oliveira