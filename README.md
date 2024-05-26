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

-------------------------------------- * --------------------------------------------

#Instruções
Para acessar o frontend do projeto, deve-se:
Realizar download do Node 20 pelo link: https://nodejs.org/dist/v20.13.1/node-v20.13.1-x64.msi
Execute o arquivo de instalação, clique em avançar até chegar na seguinte etapa:
![node](https://github.com/mayaramary/backend-usuario/assets/160061218/e96d29d7-40e8-4adc-a770-ca9c5e890eb8)

Marque a opção na caixa e clique em avançar até concluir a instalação.
Finalize o instalador, após isso vai abrir uma janela de comando do windows, pressione qualquer tecla para continuar com a instalação das ferramentas adicionais do node, isso se repetirá mais uma vez até abrir uma janela do windows powershell que irá realizar o download de algumas ferramentas nativas e instala-las no node.

- Angular 16:
Para instalar o angular, abra um promopt de comando do windows como  administrador, e digite o seguinte código:
npm install -g @angular/cli@16
![iangular](https://github.com/mayaramary/backend-usuario/assets/160061218/c9440a05-9a67-4984-bfb2-7a10fc55e549)
após finalizar a instalação digite 
ng version
vai aparecer a versão do angular instalada na maquina, a versão 16.2.14 tem que estar instalada.
Baixar arquivo do front:
Acesse o repositório: https://github.com/mayaramary/frontend-usuario e realize o download conforme a imagem
![Frontend_download](https://github.com/mayaramary/backend-usuario/assets/160061218/b5be43bc-5ba1-41b0-bf41-10c3a12f70ac)


Extraia o conteúdo do zip para a pasta: C:\Projeto

Navegue até a pasta onde foram extraído os arquivos: C:\Projeto\frontend-usuario-main\. Dentro da pasta, clique com botão direito do mouse em um espaço livre e selecione a opção "terminal", e digite o comado "npm i" para instalação do projeto, posterior, digite "ng serve", aguarde o carregamento das dependencias do projeto. Ao finalizar, aparecá o link http://localhost:4200/ clique nele e o projeto irá abrir.

![imaget](https://github.com/mayaramary/backend-usuario/assets/160061218/de35e5bc-76f2-4733-9e8a-900e6f96ad76)







