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

<img src="https://github.com/Edsongr/exerciciosDev/blob/main/public/img/home.png?raw=true" alt="Home">


Exercício 1, tela listagem e cadastro

<img src="https://github.com/Edsongr/exerciciosDev/blob/main/public/img/tabelaCriacao.png?raw=true" alt="Lista">
<img src="https://github.com/Edsongr/exerciciosDev/blob/main/public/img/cadastro.png?raw=true" alt="Create">



Exercício 2, tratando Arrays, pode ser clicado no link "abrir exemplo" para verificar passo a passo.

<img src="https://github.com/Edsongr/exerciciosDev/blob/main/public/img/abrirExemplo.png?raw=true" alt="Arrays">


Exercício 3, consultas DB.

<img src="https://github.com/Edsongr/exerciciosDev/blob/main/public/img/dml.png?raw=true" alt="Arrays">



### Created By 
Edson Oliveira
