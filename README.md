#Sobre o projeto
Este projeto refere-se à criação de uma página para cadastro e exclusão de usuários.
Foi desenvolvida a partir de um desafio proposto pela empresa na qual trabalho. Onde o backend foi desenvolvido em PHP e o frontend foi desenvolvido em Angular.

Pré-requisitos
- Utilizar Windows como sistema operacional

#Instruções
Para acessar o backend do projeto, deve-se:
1º Baixar e instalar o Xampp em sua máquina (url: https://www.apachefriends.org/pt_br/download.html)
Após download do arquivo, abra o executável para iniciar instalação.
Avance as etapas de instalação sem modificar nenhuma opção.
Após finalizar instalação, clique em finalizar. Deverá abrir o painel de controle do Xampp
Será exibida a tela a seguir:

![image](https://github.com/mayaramary/backend-usuario/assets/160061218/a4c127bc-5ecf-4bd2-8063-704d2f63dcad)
A própria instação do Xammp, irá criar arquivos automáticos. 


2º Passo: Baixar o projeto.
Realize o download zip do arquivo backend-usuario dentro do git seguindo a imagem:
![Design_sem_nome](https://github.com/mayaramary/backend-usuario/assets/160061218/483b8380-7e49-413f-a748-e5753f66109e)

Extraia o zip backend-usuario-main dentro da seguinte pasta: C:\xampp\htdocs\

Abra o painel de controle do Xampp e clique no botão de Start do Apache e MySQL
![image](https://github.com/mayaramary/backend-usuario/assets/160061218/acd9f113-f4d3-473a-95ee-f0e987a7a663)

Caso ocorra o erro ao inicializar o serviço MySQL conforme ilustrado na imagem, siga as orientações do vídeo (https://www.youtube.com/watch?v=xYvJ82eB51s)
![erro](https://github.com/mayaramary/backend-usuario/assets/160061218/fb956b33-e8da-44c8-9f84-2c6bad8c8f01)


Após iniciar os serviços de apache e MySql dentro do painel de controle do XAMPP,
Clique na opção Admin da linha do MySQL, deverá abrir no seu navegador o phpMyAdmin
![bd](https://github.com/mayaramary/backend-usuario/assets/160061218/354b8dac-b18d-4dcd-968a-5ae1a2816544)

Na coluna da esquerda, clique em Novo para criar um novo banco de dados.
Em Nome do banco, escreva "cad_embras" e deixe o padrão utf8mb4_general_ci
![bdini](https://github.com/mayaramary/backend-usuario/assets/160061218/e516fd09-d1ac-4118-a4eb-65378312721c)

Após criar o banco, clique na segunda coluna SQL para abrir o campo de consulta de código SQL.
Digite o seguinte comando:

CREATE TABLE cad_embras.usuarios 
(id INT NOT NULL AUTO_INCREMENT , nome VARCHAR(100) NOT NULL , email VARCHAR(100) NOT NULL , PRIMARY KEY (id));
![bdc](https://github.com/mayaramary/backend-usuario/assets/160061218/b7d99389-5579-4635-a276-72e69a03b8c6)

e clique em Executar no canto inferior direito, ele ira retornar uma mensagem dizendo que foi incluído a tabela Usuários.

O backend do projeto está pronto para uso!




