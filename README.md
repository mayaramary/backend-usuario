# Sobre o projeto

> Este projeto refere-se à criação de uma página para cadastro e exclusão de usuários.
Foi desenvolvida a partir de um desafio proposto pela empresa na qual trabalho. Onde o backend foi desenvolvido em PHP e o frontend foi desenvolvido em Angular



## ⚡️ **Pré-requisitos**

> [!NOTE]
> Utilize **Windows** como sistema operacional. 

## 💻 **Instruções** 
Para acessar o backend do projeto, deve-se:
* Baixar e instalar o **XAMPP** em sua máquina [Download](https://www.apachefriends.org/pt_br/download.html).

* Após download do arquivo, **abra** o executável para iniciar instalação.
  * Avance as etapas de instalação sem modificar nenhuma opção.
  * Após finalizar instalação, clique em **finalizar**. Deverá abrir o painel de controle do Xampp
Será exibida a tela a seguir:

![image](https://github.com/mayaramary/backend-usuario/assets/160061218/a4c127bc-5ecf-4bd2-8063-704d2f63dcad)

* A própria instalação do **XAMPP**, irá criar arquivos necessários de maneira automática. 


## 🌐 **Baixar o projeto backend.**
* Acesse o repositório do backend pelo [link](https://github.com/mayaramary/backend-usuario)
  
* Realize o download zip do arquivo ***backend-usuario*** dentro do git seguindo a imagem:
  
![Design_sem_nome](https://github.com/mayaramary/backend-usuario/assets/160061218/483b8380-7e49-413f-a748-e5753f66109e)

* Extraia o conteúdo do zip backend-usuario-main dentro da seguinte pasta: ***C:\xampp\htdocs\projetoembras***

>[!IMPORTANT]
>
>**E importante lembrar que deve-se extrair somente o conteúdo do zip para dentro do htdocs como mostra a imagem.**


![image](https://github.com/vitorj98/projetoembras/assets/170897406/9c5fc1f7-e4c8-4659-a639-23f33bb38fca)

### **Iniciar o XAMPP & Configurar o MySQL**
* Abra o painel de controle do **XAMPP** e clique no botão de **Start** do Apache e MySQL

![image](https://github.com/mayaramary/backend-usuario/assets/160061218/acd9f113-f4d3-473a-95ee-f0e987a7a663)


>[!TIP]
>
>**Caso ocorra o erro ao inicializar o serviço MySQL conforme ilustrado na imagem, siga as orientações do [vídeo](https://www.youtube.com/watch?v=xYvJ82eB51s)**
>

![erro](https://github.com/mayaramary/backend-usuario/assets/160061218/fb956b33-e8da-44c8-9f84-2c6bad8c8f01)


* Após iniciar os serviços de **Apache** e **MySql** dentro do painel de controle do **XAMPP**,
* Clique na opção **Admin** da linha do **MySQL**, deverá abrir no seu navegador o ***phpMyAdmin***
  
![bd](https://github.com/mayaramary/backend-usuario/assets/160061218/354b8dac-b18d-4dcd-968a-5ae1a2816544)


* Na coluna da esquerda, clique em **Novo** para criar um novo banco de dados.
* Em Nome do banco, escreva **"cad_embras"** e deixe o padrão **utf8mb4_general_ci**
  
![image1](https://github.com/mayaramary/backend-usuario/assets/160061218/470eee62-eeee-4692-abfc-4dea2323c006)


* Após criar o banco, clique na segunda coluna **SQL** para abrir o campo de consulta de código **SQL**.
* **Digite o seguinte comando:**

```bash
CREATE TABLE cad_embras.usuarios 
(id INT NOT NULL AUTO_INCREMENT , nome VARCHAR(100) NOT NULL , email VARCHAR(100) NOT NULL , PRIMARY KEY (id));
```

![image2](https://github.com/mayaramary/backend-usuario/assets/160061218/fceb064b-cb11-4ecd-9557-f129d9627337)

* Clique em **Executar** no canto inferior direito, ele ira retornar uma mensagem dizendo que foi incluído a tabela Usuários.

### O backend do projeto está pronto para uso!


## **Instruções de preparo frontend**
* Para acessar o frontend do projeto, deve-se:
* Realizar download do **Node 20**
  
![node](https://cdn.iconscout.com/icon/free/png-512/free-node-js-1174925.png?f=webp&w=256)

* Clicando no **[link](https://nodejs.org/dist/v20.13.1/node-v20.13.1-x64.msi)**
  
* Execute o arquivo de instalação, clique em avançar até chegar na seguinte etapa:
  
![s](https://github.com/mayaramary/backend-usuario/assets/160061218/e96d29d7-40e8-4adc-a770-ca9c5e890eb8)

* Marque a **opção na caixa** e clique em avançar até concluir a instalação.
  
* Finalize o instalador, após isso vai abrir uma janela de comando do windows, pressione qualquer tecla para continuar com a instalação das ferramentas adicionais do Node.
  *  isso se repetirá mais uma vez até abrir uma janela do windows powershell que irá realizar o download de algumas ferramentas nativas e instala-las no node.

## **Angular 16**
![angular-logo](https://media.licdn.com/dms/image/D5612AQEmaeUCJ9kaIw/article-cover_image-shrink_720_1280/0/1683652526209?e=1722470400&v=beta&t=ClysrmB7p57iFo3qMxaZOlrC0k026WcH0-XWr59d-Ak)

* Para instalar o angular, abra um **prompt de comando** do windows como **administrador**, e digite o seguinte código:

``` bash
npm install -g @angular/cli@16
```

![iangular](https://github.com/mayaramary/backend-usuario/assets/160061218/c9440a05-9a67-4984-bfb2-7a10fc55e549)


* Após finalizar a instalação digite:
  
``` bash
ng version
```

* Ira aparecer a versão do angular instalada na maquina, a **versão 16.2.14** tem que estar instalada.

>[!NOTE]
>
>**Foi utilizado a versão 16.2.14 para reduzir as possibilidades de bugs, deve-se atentar as versões do angular instalada na maquina**.

## **Baixar arquivo do front**
* Link repositório [front](https://github.com/mayaramary/frontend-usuario)
* Acesse o repositório e realize o download conforme a imagem
  
![Frontend_download](https://github.com/mayaramary/backend-usuario/assets/160061218/b5be43bc-5ba1-41b0-bf41-10c3a12f70ac)

* Extraia o conteúdo do zip para o caminho: **C:\Projeto**

* Navegue até a pasta onde foram extraído os arquivos: C:\Projeto\frontend-usuario-main\. 
* Dentro da pasta, clique com botão direito do mouse em um espaço livre e selecione a opção **"terminal"**.
* Digite o comado:

``` bash
npm i
```

* Sera feito a instalação do projeto, após isso, digite:
``` bash
ng serve
```

* Aguarde o carregamento das dependências do projeto. Ao finalizar, aparecerá o **link http://localhost:4200/** clique nele no terminal e o projeto irá abrir.

![imaget](https://github.com/mayaramary/backend-usuario/assets/160061218/de35e5bc-76f2-4733-9e8a-900e6f96ad76)

## 🤝 **Contato**
  Mayara Maria - mayara.maria@embras.net
  







