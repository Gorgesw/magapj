Para executar o projeto:

1. Instalar: wampserver, MYSQL. 

2.Crie uma conexão no MYSQL e execute o seguinte comando:

CREATE DATABASE IF NOT EXISTS cadastro; 
CREATE TABLE IF NOT EXISTS dados (
  id int NOT NULL AUTO_INCREMENT,
  nome text NOT NULL,
  cpf text NOT NULL,
  contato text,
  PRIMARY KEY (id)
);

O comando vai criar um database e uma tabela, a qual vai guardar as informaçoes.

3. Baixe  todos os arquivos do projeto em uma pasta (https://github.com/Gorgesw/magapj) 
Jogue essa pasta  na  www (pasta presente nos arquivos do wampserver) - C:\wamp64\www

4. Na url do  nagevador, com o wampserver executado digite localhost/magapj/index.html
isso te levara para  a pagina inicial do projeto.

