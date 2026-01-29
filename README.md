# Blog Laravel 8

Este é um projeto de blog desenvolvido com **Laravel 8**, focado em fornecer uma estrutura funcional para publicação de artigos e interação via comentários. O sistema utiliza **Blade Templates** para o front-end, estilizado com **MDBootstrap**.

## Funcionalidades

- **Autenticação de Usuários**: Login e controle de sessão.
- **Gestão de Posts**: Visualização de listagem e detalhes de artigos via slugs amigáveis.
- **Sistema de Comentários**:
  - Usuários autenticados podem comentar nos posts.
  - Validação de dados no backend.
  - **Eventos e Listeners**: Disparo de eventos (CommentPost) ao criar um comentário, configurado para envio de e-mails.
- **Interface Responsiva**: Layout construído com MDB (Material Design for Bootstrap).

## Tecnologias Utilizadas

- **PHP** ^7.3 | ^8.0
- **Laravel Framework** 8.75
- **MySQL** (Banco de dados)
- **Blade** (Template Engine)
- **MDBootstrap** (Interface)

## Instalação e Configuração

Siga os passos abaixo para rodar o projeto em seu ambiente local:

1. Clone o repositório
   git clone https://github.com/seu-usuario/blog-laravel8.git
   cd blog-laravel8

2. Instale as dependências
   composer install

3. Configure o ambiente
   Crie o arquivo .env a partir do exemplo e configure suas credenciais de banco de dados:
   cp .env.example .env

4. Gere a chave da aplicação
   php artisan key:generate

5. Banco de Dados
   Execute as migrações e popule o banco com dados de teste (usuários, posts e comentários):
   php artisan migrate --seed

6. Inicie o servidor
   php artisan serve

## Estrutura Principal

- app/Http/Controllers: Controladores para Posts, Comentários e Login.
- app/Events & app/Listeners: Lógica para processamento de eventos de comentários.
- resources/views: Templates Blade para renderização das páginas.
- routes/web.php: Definição das rotas web do sistema.

## Licença

Este projeto está sob a licença MIT.
