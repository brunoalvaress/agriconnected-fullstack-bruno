# Sistema REST AgriConnected



O sistema REST foi desenvolvido para a AgriConnected. Consiste em um sistema de cadastro e consulta de observações de círculos alienígenas em plantações no Brasil. O usuário insere a cidade, estado e data em que avistou, então esses dados são enviados para um banco de dados, sendo possível ver todas as ocorrências e também a frequência de acontecimentos separadas por estado. 

## Tecnologias utilizadas

- HTML5
- CSS3
- Bootstrap 2.3.2
- PHP 7
- MariaDB 10.1.18

## Requisitos

- Brackets ou outro editor
- XAMPP 1.8.8

## Guia

1. É necessário clonar o repositório com o comando `git clone https://github.com/brunoalvaress/agriconnected-fullstack-bruno.git`
2. Configurar o código para acessar ao banco de dados 
3. Configurar o XAMPP com a porta do servidor escolhido

## Funcionalidades

- Cadastro da plantação através do formulário, usa-se o método POST
- Consulta ao banco de dados completo utilizando GET
- Consulta ao banco de dados filtrado por frequência de observações por estado utilizando GET

### Aplicação
A aplicação rodando e funcional está disponível no seguinte link de teste:

https://agriconnectedtestebruno.000webhostapp.com/AgriConnectedPrincipal/paginaprincipal.html
